<?php


require '../database/MyDb.php';

$db = new MyDb();

$sql =<<<EOF
        create table students(
        adminNo text primary key,
        firstname text not null,
        lastname text,
        age int,
        school text,
        department text,
        dateEnrolled text,
        dorm text,
        club text,
        gender text,
        email text
        )
        EOF;

$db->exec($sql);
