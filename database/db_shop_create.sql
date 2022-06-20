create table Item
(
    id int not null auto_increment,
    name varchar(500) not null,
    price float not null,
    shortDesc text not null,
    fullDesc text not null,
    img varchar(255) not null default 'no_image',
    active bool,
    creationDate timestamp default current_timestamp,
    editingDate timestamp,

    primary key (id)
);

create table Status
(
    id int not null auto_increment,
    name varchar(500) not null,

    primary key (id)
);

create table `Order`
(
    id int not null auto_increment,
    status_id int not null,
    user_id int not null,
    comment text,
    qty int not null,
    sum float not null,
    creationDate timestamp not null default current_timestamp,
    editingDate timestamp,

    primary key (id),
    foreign key fk_OrderStatus(status_id)
        references Status(id),
    foreign key fk_OrderUser(user_id)
        references User(id)
);

create table Order_Item
(
    id int not null auto_increment,
    title varchar(255) not null,
    price float not null,
    qty int not null,
    item_id int not null,
    order_id int not null,

    primary key (id),
    foreign key fk_OrderOI(order_id)
        references Status(id),
    foreign key fk_ItemOI(item_id)
        references Item(id)
);

create table Item_Image
(
    id int not null auto_increment,
    item_id int not null,
    img varchar(255) not null default 'no_image',

    primary key (id),
    foreign key fk_ItemII(item_id)
        references Item(id)
);

create table Category
(
    id int not null auto_increment,
    name varchar(500) not null,
    alias varchar(500) not null,
    parent_id int not null default 0,

    primary key (id)
);

create table Item_Category
(
    item_id int not null,
    category_id int not null,

    foreign key fk_ItemIC(item_id)
        references Item(id),
    foreign key fk_CategoryIC(category_id)
        references Category(id)
);

create table Attributes
(
    id int not null auto_increment,
    name varchar(500) not null,
    category_id int not null,

    primary key (id),
    foreign key fk_CategoryAttributes(category_id)
        references Category(id)
);

create table AttributesValue
(
    id int auto_increment,
    value varchar(255) not null,
    attributes_id int not null,

    primary key (id)
);

create table AttributesValue_Item
(
    item_id int not null,
    attributesValue_id int not null,

    foreign key fk_AttributesValueAI(attributesValue_id)
        references AttributesValue(id),
    foreign key fk_ItemAI(item_id)
        references Item(id)
);

create table ProductSearch
(
    product_id nchar(4) not null,
    categories_IDS varchar(999) not null,
    productData text not null,

    primary key (product_id)
);

create table JunkSearch
(
    user_id int not null,
    product_id nchar(4) not null,
    amount int not null,

    foreign key fk_UserJunk (user_id)
        references User (id),
    foreign key fk_ProductJunk (product_id)
        references ProductSearch (product_id)
)