create table entity
(
    entity_id   bigint                                             not null comment '实体注册ID'
        primary key,
    entity_type enum ('game', 'comment', 'user') default 'comment' not null comment '实体注册类型',
    constraint entity_entity_id_uindex
        unique (entity_id)
)
    comment '实体注册表';

create table game
(
    game_id     bigint      not null comment '游戏实体注册ID'
        primary key,
    game_name   varchar(50) not null comment '游戏名称',
    game_detail text        not null comment '游戏介绍',
    constraint game_entity_id_uindex
        unique (game_id),
    constraint fk_entity_id_game
        foreign key (game_id) references entity (entity_id)
)
    comment '游戏实体表';

create table game_pictures
(
    game_id    bigint        not null comment '图片所属的游戏的ID'
        primary key,
    picture_id bigint        not null comment '图片的唯一ID',
    pic1       varchar(2500) not null,
    pic2       varchar(2500) null,
    pic3       varchar(2500) null,
    pic4       varchar(2500) null,
    pic5       varchar(2500) null,
    constraint game_pictures_picture_id_uindex
        unique (picture_id),
    constraint fk_game_pictures
        foreign key (game_id) references game (game_id)
)
    comment '游戏的图片,url';

create table user
(
    user_id       bigint        not null comment '用户实体注册ID'
        primary key,
    user_name     varchar(50)   not null comment '用户名称',
    user_password varchar(256)  not null comment '用户密码
由于php 7.4的password_hash()函数产生的hash值最大为255
长度设置为256',
    user_avatar   varchar(2500) null comment '用户头像 url',
    constraint user_entity_id_uindex
        unique (user_id),
    constraint fk_entity_id_user
        foreign key (user_id) references entity (entity_id)
)
    comment '用户实体表';

create table comment
(
    comment_id           bigint   not null comment '评论实体ID'
        primary key,
    comment_to_entity_id bigint   not null comment '评论所属的实体的ID',
    user_id              bigint   not null comment '评论所属的用户的ID',
    comment_time         datetime not null comment '评论发布时间',
    comment_text         text     not null comment '评论内容文本',
    constraint comment_entity_id_uindex
        unique (comment_id),
    constraint fk_comment_user_id
        foreign key (user_id) references user (user_id),
    constraint fk_entity_id_comment
        foreign key (comment_id) references entity (entity_id),
    constraint fk_entity_id_comment_to
        foreign key (comment_id) references entity (entity_id)
)
    comment '评论实体表';

create table followed_entity
(
    entity_id bigint not null comment '用户关注的实体的ID',
    user_id   bigint not null comment '用户ID',
    constraint followed_entity_pk
        unique (entity_id, user_id),
    constraint fk_followed_entity_id
        foreign key (entity_id) references entity (entity_id),
    constraint fk_user_id_followed
        foreign key (user_id) references user (user_id)
)
    comment '用户关注的实体表';

create table liked_entity
(
    entity_id bigint not null comment '点赞过的实体的ID',
    user_id   bigint not null comment '点赞的用户的ID',
    constraint liked_entity_entity_id_uindex
        unique (entity_id),
    constraint liked_entity_pk
        unique (entity_id, user_id),
    constraint fk_liked_entity_id
        foreign key (entity_id) references entity (entity_id),
    constraint fk_liked_user_id
        foreign key (user_id) references user (user_id)
)
    comment '点赞过的实体';


