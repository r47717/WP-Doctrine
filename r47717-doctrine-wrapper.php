<?php
/*
Plugin Name: r47717 Doctrine Wrapper
Version: 1.0
Author: r47717
*/

require_once(__DIR__ . "/class-myuser.php");
require_once(__DIR__ . "/class-mypost.php");
require_once(__DIR__ . "/repository.php");


if (function_exists('GetEntityManager')):

    /* EntityManager and Repository Examples */

    function getPostById($id) {
        return GetEntityManager()->find('MyPost', $id);
    }

    function getPostsByTitle($title) {
        return GetEntityManager()->getRepository('MyPost')->findBy(['post_title' => $title]);
    }

    function getPostsByAuthor($author) {
        return postRepository()->findBy(['author' => $author, 'post_status' => 'publish']);
    }

    function createSomePosts() {
        $em = GetEntityManager();
        $author = $em->find("MyUser", 1);
        
        $post1 = new MyPost();
        $post1->setAuthor($author);
        $post1->setPostTitle('post 1');
        $em->persist($post1);

        $post2 = new MyPost();
        $post2->setAuthor($author);
        $post2->setPostTitle('post 2');
        $em->persist($post2);

        $post3 = new MyPost();
        $post3->setAuthor($author);
        $post3->setPostTitle('post 3');
        $em->persist($post3);

        $em->flush();
    }

    function modifyPost($title) {
        $em = GetEntityManager();
        $post = postRepository()->findOneBy(['post_title' => $title]);
        if ($post) {
            $post->setPostTitle("my new post");
            $em->flush();
        }
    }

    function deletePost($id) {
        $em = GetEntityManager();
        $post = postRepository()->find($id);
        $em->remove($post);
        $em->flush();
    }

    function getPostAuthor(MyPost $post) {
        return $post->getAuthor();
    }

    /* Query Builder and Expression Builder examples */

    function getPostsByType($type = 'post') {
        $entityManager = GetEntityManager();

        $res = $entityManager
            ->createQueryBuilder()
            ->select('p')
            ->from('MyPost', 'p')
            ->where("p.post_type = '{$type}'")
            ->andWhere("p.post_status = 'publish'")
            ->orderBy('p.post_title', 'ASC')
            ->getQuery()
            ->getResult();

        return $res;
    }

    function getPostsForUser(MyUser $author) {
        $em = GetEntityManager();

        $qb = $em->createQueryBuilder();
        return $qb
            ->select(['p.post_title', 'p.post_type', 'u.user_login'])
            ->from('MyPost', 'p')
            ->join('MyUser', 'u')
            ->where($qb->expr()->eq('u.ID', $author->getID()))
            ->andWhere($qb->expr()->eq('p.post_type', ':postType'))
            ->setParameter('postType', 'post')
            ->getQuery()
            ->getResult();
    }

    function getAllAuthors() {
        $em = GetEntityManager();

        return $em->createQueryBuilder()
            ->select('a.user_login')
            ->distinct()
            ->from('MyPost', 'p')
            ->join('p.author', 'a')
            ->getQuery()
            ->getResult();
    }

    /* DQL (Doctrine Query Language) Examples */

    function getAllPublishedPosts($user) {
        $em = GetEntityManager();
        $q = $em->createQuery("SELECT p.post_title, p.post_type FROM MyPost p JOIN p.author a WHERE p.post_status = 'publish' AND a.ID = {$user->getID()}");
        return $q->getResult();
    }

    function getAllPostsWithEmptyName() {
        $em = GetEntityManager();
        $q = $em->createQuery("SELECT p FROM MyPost p WHERE p.post_name = ''");
        return $q->getResult();
    }



endif;
