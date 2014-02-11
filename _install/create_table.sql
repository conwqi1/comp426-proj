CREATE DATABASE IF NOT EXISTS `brewery_finder`;



CREATE TABLE IF NOT EXISTS `brewery` (
  `brewery_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing brewery_id',
  `brewery_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'brewery''s name',
  `brewery_phone` varchar(13) COLLATE utf8_unicode_ci NOT NULL COMMENT 'brewery''s phone',
  `brewery_rating` float NOT NULL COMMENT 'rate of each brewery',
  `city_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL COMMENT 'city''s name',
  `state_name` char(2) COLLATE utf8_unicode_ci NOT NULL COMMENT 'state''s name',
  `brewery_address` varchar(200) COLLATE utf8_unicode_ci COMMENT 'brewery''s address',
  `brewery_url` varchar(200) COLLATE utf8_unicode_ci COMMENT 'brewery''s url',
  PRIMARY KEY (`brewery_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='brewery data' AUTO_INCREMENT=1;