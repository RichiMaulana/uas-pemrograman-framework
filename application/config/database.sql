create table customers
(
    id            int auto_increment
        primary key,
    customer_code varchar(20)                           null,
    name          varchar(100)                          null,
    company       varchar(100)                          null,
    phone         varchar(20)                           null,
    email         varchar(100)                          null,
    total_orders  int       default 0                   null,
    created_at    timestamp default current_timestamp() null,
    constraint customer_code
        unique (customer_code)
);

create table goods
(
    id           int auto_increment
        primary key,
    product_code varchar(20)                                                                null,
    name         varchar(100)                                                               null,
    category     varchar(50)                                                                null,
    stock        int                                            default 0                   null,
    price        decimal(15, 2)                                                             null,
    status       enum ('In Stock', 'Low Stock', 'Out of Stock') default 'In Stock'          null,
    created_at   timestamp                                      default current_timestamp() null,
    constraint product_code
        unique (product_code)
);

create table sales_transactions
(
    id               int auto_increment
        primary key,
    invoice_number   varchar(30)                                                      null,
    customer_id      int                                                              null,
    transaction_date date                                                             null,
    total_amount     decimal(15, 2)                                                   null,
    items_count      int                                                              null,
    status           enum ('Paid', 'Pending', 'Canceled') default 'Pending'           null,
    created_at       timestamp                            default current_timestamp() null,
    constraint invoice_number
        unique (invoice_number),
    constraint sales_transactions_ibfk_1
        foreign key (customer_id) references customers (id)
);

create table delivery_orders
(
    id                   int auto_increment
        primary key,
    do_number            varchar(30)                                                                             null,
    sales_transaction_id int                                                                                     null,
    delivery_date        date                                                                                    null,
    items_count          int                                                                                     null,
    status               enum ('Delivered', 'On Process', 'On Delivery', 'Canceled') default 'On Process'        null,
    created_at           timestamp                                                   default current_timestamp() null,
    constraint do_number
        unique (do_number),
    constraint delivery_orders_ibfk_1
        foreign key (sales_transaction_id) references sales_transactions (id)
);

create index sales_transaction_id
    on delivery_orders (sales_transaction_id);

create index customer_id
    on sales_transactions (customer_id);

