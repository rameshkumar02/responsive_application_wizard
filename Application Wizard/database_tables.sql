

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";



CREATE TABLE IF NOT EXISTS `Clients` (
  `ClientID` int(11) NOT NULL auto_increment,
  `Companyname` varchar(150) NOT NULL,
  `Industry` varchar(150) NOT NULL,
  `Businessdspn` varchar(150) NULL,
  `Region` varchar(150) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `City` varchar(150) NULL,
  `States` varchar(150) NOT NULL,
  `Zipcode` varchar(150) NULL,
  `Personname` varchar(150) NOT NULL,
  `Designation` varchar(150) NOT NULL,
  `Phonenumber` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Skypeid` varchar(150) NULL,
  `Website` varchar(150) NULL,
  `Authority` varchar(150) NULL,
  `Authorityname` varchar(150) NULL,
  `Objofapplication` varchar(150) NULL,
  `Category` varchar(150) NULL,
  `Othercategory` varchar(150) NULL,
  `Service` varchar(150) NULL,
  `Targetaudience` varchar(150) NULL,
  `Focusapplication` varchar(150) NULL,
  `Existingtarget` varchar(150) NULL,
  `Budget` varchar(150) NULL,
  `USD` varchar(200) NULL,
  `Timeframe` varchar(200) NULL,
  PRIMARY KEY  (`ClientID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;


CREATE TABLE IF NOT EXISTS `Clients_Compete_websites_link` (
  `ClientID` int(11) NOT NULL,
  `WebsiteID` int(11) NOT NULL,
  PRIMARY KEY  (`ClientID`,`WebsiteID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `Compete_websites` (
  `WebsiteID` int(11) NOT NULL auto_increment,
  `Website_URL` varchar(250) NOT NULL,
  PRIMARY KEY  (`WebsiteID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;
