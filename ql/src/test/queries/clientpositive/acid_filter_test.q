set hive.mapred.mode=nonstrict;
set hive.support.concurrency=true;
set hive.txn.manager=org.apache.hadoop.hive.ql.lockmgr.DbTxnManager;


create  table customers_man (customer_id bigint, first_name string) PARTITIONED BY (last_name string) STORED AS orc TBLPROPERTIES ('transactional'='true');

insert into customers_man values(1, "Joanna", "Pierce"),(1, "Sharon", "Taylor"), (2, "Joanna", "Silver"), (2, "Bob", "Silver"), (2, "Susan", "Morrison") ,(2, "Jake", "Donnel") , (3, "Blake", "Burr"), (3, "Trudy", "Johnson"), (3, "Trudy", "Henderson");
select * from customers_man;

UPDATE customers_man SET customer_id=22 WHERE last_name='Pierce' OR last_name='Taylor' ;
select * from customers_man;


UPDATE customers_man SET customer_id=22 WHERE last_name='Pierce' OR 'Taylor' ;
select * from customers_man;

UPDATE customers_man SET customer_id=23 WHERE "anything";
select * from customers_man;

set hive.cbo.fallback.strategy=NEVER;

UPDATE customers_man SET customer_id=220 WHERE last_name='Pierce' OR 'Taylor' ;
select * from customers_man;
DELETE from customers_man WHERE last_name='Pierce' OR 'Taylor' ;
select count(*) from customers_man;

set hive.cbo.fallback.strategy;