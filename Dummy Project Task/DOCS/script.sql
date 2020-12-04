create table categories
(
    id   int auto_increment
        primary key,
    name varchar(50) not null
);

create table products
(
    id          int auto_increment
        primary key,
    name        varchar(50)  not null,
    price       int          not null,
    quantity    int          not null,
    description text         not null,
    image       varchar(500) not null,
    category_id int          not null,
    constraint products_categories_id_fk
        foreign key (category_id) references categories (id)
            on delete cascade
);

create table users
(
    name     varchar(50) not null,
    username varchar(50) not null,
    email    varchar(50) not null,
    password varchar(50) not null
);


