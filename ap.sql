CREATE DATABASE ap;
USE ap;
CREATE TABLE Vendors
    (constraint vendorID  INT     PRIMARY KEY,
     vendorName         VARCHAR(45) NOT NULL,
     vendorAddress     VARCHAR(45) NOT NULL,
     vendorCity        VARCHAR(45) NOT NULL,
     vendorState       VARCHAR(45) NOT NULL,
     vendorZipCode     VARCHAR(10) NOT NULL, 
     vendorPhone       VARCHAR(20) NOT NULL
    );


CREATE TABLE Invoices 
    (
     constraint vendorID INT  FOREIGN KEY, 
     InvoiceNumber VARCHAR(45),
     InvoiceDate DATETIME,
     InvoiceTotal DECIMAL,
     paymentTotal DECIMAL,
     invoiceID  INT 
    );

CREATE TABLE lineItems 
(lineItemID INT PRIMARYKEY,
 description VARCHAR(45),
 quantity INT,
 price INT,
 lineItemTotal DECIMAL 
);







