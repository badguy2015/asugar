CREATE TABLE hd_attr (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  name char(10) NOT NULL DEFAULT '',
  color char(10) NOT NULL DEFAULT '',
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8

CREATE TABLE hd_blog (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  title varchar(30) NOT NULL DEFAULT '',
  content text,
  summary varchar(255) NOT NULL DEFAULT '',
  time int(10) unsigned NOT NULL DEFAULT '0',
  click smallint(6) unsigned NOT NULL DEFAULT '0',
  cid int(10) unsigned NOT NULL,
  del tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (id),
  KEY cid (cid)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8

CREATE TABLE hd_blog_attr (
  bid int(10) unsigned NOT NULL,
  aid int(10) unsigned NOT NULL,
  KEY bid (bid),
  KEY aid (aid)
) ENGINE=MyISAM DEFAULT CHARSET=utf8

CREATE TABLE hd_cate (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  name char(15) NOT NULL DEFAULT '',
  pid int(10) unsigned NOT NULL DEFAULT '0',
  sort smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8

CREATE TABLE hd_user (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  username char(20) NOT NULL DEFAULT '',
  password char(32) NOT NULL DEFAULT '',
  logintime int(10) unsigned NOT NULL DEFAULT '0',
  loginip char(20) NOT NULL DEFAULT '',
  PRIMARY KEY (id),
  UNIQUE KEY username (username)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8

CREATE TABLE hd_user_feedback (
  id int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  name char(20) NOT NULL DEFAULT 'anonymity' COMMENT '姓名',
  mobile char(11) NOT NULL DEFAULT 'empty' COMMENT '电话',
  msg mediumtext COMMENT '留言信息',
  create_time int(11) DEFAULT NULL COMMENT '留言时间',
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户反馈表'
