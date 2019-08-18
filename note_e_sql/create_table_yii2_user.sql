CREATE TABLE `yii2_user`
(
    `id`           int(11)                              NOT NULL AUTO_INCREMENT,
    `created_at`   timestamp                            NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at`   timestamp                            NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `created_by`   int(11)                                       DEFAULT NULL,
    `updated_by`   int(11)                                       DEFAULT NULL,
    `username`     varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `password`     varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `email`        varchar(32) COLLATE utf8_unicode_ci  NOT NULL,
    `aut_key`      varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `access_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `roles`        varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `deactive`     int(11)                              NOT NULL DEFAULT '0',
    UNIQUE KEY `PK_ID` (`id`),
    KEY `FK_1` (`created_by`),
    KEY `FK_2` (`updated_by`),
    CONSTRAINT `FK_1` FOREIGN KEY (`created_by`) REFERENCES `yii2_user` (`id`),
    CONSTRAINT `FK_2` FOREIGN KEY (`updated_by`) REFERENCES `yii2_user` (`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8
  COLLATE = utf8_unicode_ci;

INSERT INTO `yii2_user` (`id`, `created_at`, `updated_at`, `created_by`, `updated_by`, `username`, `password`, `email`,
                         `aut_key`, `access_token`, `roles`, `deactive`)
VALUES (1, '2019-04-19 09:46:40', '2019-04-30 12:34:00', 1, 1, 'admin', 'admin', 'a@a.it', 'admin-100at', 'admin-100at',
        'admin', 0);