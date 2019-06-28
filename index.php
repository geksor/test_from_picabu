<?php
include 'JobSeeker.php';

$s = new JobSeeker();
assert(
    !class_exists('Foo')
    && !class_exists('Bar\Foo')
    && true === JobSeeker::questClassSearch()
    && class_exists('Foo')
    && class_exists('Bar\Foo')
);

assert(
    (new JobSeeker())->questString('Hello world!')
);

//assert(
//    preg_match(
//        '@^Меня зовут [А-Я][а-я]{1,15}, мне [1-9][0-9], я из [гд]\.\s[А-Я][-а-я]{1,20}$@',
//        (new JobSeeker())
//            ->questGreeting('Меня зовут %3$s, мне %1$d, я из %2$s')
//            ->scalar
//    ) > 0
//);

assert(
    (new JobSeeker())->questReducer('21221322312233122') === '123'
);

$s = new JobSeeker();
assert(
    $s->questKey(202, 92, 331)
    && $s->questKey(115, 39, 97)
    && $s->questKey(15, 268435456, 480)
);


$s = new JobSeeker();
assert(
    $s->questRegExp("15.2;mr;'D\\'Artagnan';'Moscow'") === 'mr. D\'Artagnan has 15 coins'
    && $s->questRegExp("female;43.0;'Minsk';ms;'Ekaterina'") === 'ms. Ekaterina has 43 coins'
    && $s->questRegExp("54;'Tokyo';mr;'Suihui\\'v Chai'") === 'mr. Suihui\'v Chai has 54 coins'
);

$s = new JobSeeker();

assert(
    ($s->{4}->{5}->{3})() === 12,
    ($s->{2}->{2})() === 4
);

assert(
    (new JobSeeker())->questLabyrinth(14, 2309, 11316, 9121, 10276)
);
