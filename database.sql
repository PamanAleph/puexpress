create table customer (
    cust_id int (16) auto_increment,
    cust_name varchar (255),
    cust_address varchar (255),
    cust_pnumber int (20),
    cust_email varchar (255),

    primary key (cust_id)
);
create table receiver (
    receiver_id int (16) auto_increment,
    receiver_name varchar (255),
    receiver_address varchar (255),
    receiver_pnumber int (20),
    receiver_email varchar (255),

    primary key (receiver_id)
);
create table courier (
    courier_id int (16) auto_increment,
    courier_name varchar (255),
    courier_pnumber int (20),
    courier_office_address varchar (255),
    courier_vehicle_type varchar (255),

    primary key (courier_id)
);
create table goods (
    goods_id int (16) auto_increment,
    goods_name varchar (255),
    goods_description varchar (255),
    goods_insurance varchar (255),
    goods_weight int (255),

    primary key (goods_id)
);
create table services (
    services_id int (16) auto_increment,
    courier_id int (16),
    services_name varchar (255),
    services_description varchar (255),
    services_price int (20),

    primary key (services_id)
);
create table delivery (
    delivery_id int (16) auto_increment,
    courier_id int (16),
    cust_id int (16),
    receiver_id int (16),
    goods_id int (16),
    services_id int (16),
    delivery_date timestamp (6),
    delivery_weight int (20),
    delivery_price int (20),
    delivery_status varchar (255),

    primary key (delivery_id),
    foreign key (courier_id) references courier (courier_id),
    foreign key (cust_id) references customer (cust_id),
    foreign key (receiver_id) references receiver (receiver_id),
    foreign key (goods_id) references goods (goods_id),
    foreign key (services_id) references services (services_id)

)

ALTER TABLE customer AUTO_INCREMENT = 1000001
ALTER TABLE receiver AUTO_INCREMENT = 2000001
ALTER TABLE courier AUTO_INCREMENT = 3000001
ALTER TABLE goods AUTO_INCREMENT = 4000001
ALTER TABLE services AUTO_INCREMENT = 5000001
ALTER TABLE delivery AUTO_INCREMENT = 6000001