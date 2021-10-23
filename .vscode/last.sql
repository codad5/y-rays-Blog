CREATE TABLE admin (
	prykey int(11) PRIMARY KEY AUTO_INCREMENT,
    Admin varchar(123) NOT NULL,
    pwd varchar(700) nOT NULL,
    ResumeText TEXT NOT NULL,
    Email varchar(700) NOT NULL,
    Phone varchar(700) NOT NULL,
    whatsapp varchar(700) NOT NULL,
    facebook varchar(700) NOT NULL,
    instagram varchar(700) NOT NULL,
    artstation varchar(700) NOT NULL,
    Picture varchar(700) NOT NULL,
    coverPhoto varchar(700),
    ResumeFile varchar(700)
    
);



CREATE TABLE post (
	prykey int(11) PRIMARY KEY AUTO_INCREMENT,
    postId varchar(123) NOT NULL,
    PostName varchar(123) NOT NULL,
    postText TEXT NOT NULL,
    category varchar(700) NOT NULL,
    tags varchar(700) NOT NULL,
    Photo1 varchar(700) nOT NULL,
    Photo2 varchar(700) nOT NULL,
    Photo3 varchar(700) nOT NULL,
    Photo4 varchar(700) nOT NULL,
    Photo5 varchar(700) nOT NULL,
    Photo6 varchar(700) nOT NULL,
    Photo7 varchar(700) nOT NULL,
    Photo8 varchar(700) nOT NULL,
    Photo9 varchar(700) nOT NULL,
    Photo10 varchar(700) nOT NULL, 
    zipfile varchar(700) not null,
    facebook varchar(700) NOT NULL,
    instagram varchar(700) NOT NULL,
    artstation varchar(700) NOT NULL,
    
    
);