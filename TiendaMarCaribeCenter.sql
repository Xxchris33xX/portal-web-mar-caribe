PGDMP     $                    z            TiendaMarCaribeCenter    14.1    14.1 t    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    16394    TiendaMarCaribeCenter    DATABASE     s   CREATE DATABASE "TiendaMarCaribeCenter" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Spanish_Spain.1252';
 '   DROP DATABASE "TiendaMarCaribeCenter";
                admin    false            �           0    0     DATABASE "TiendaMarCaribeCenter"    COMMENT     w   COMMENT ON DATABASE "TiendaMarCaribeCenter" IS 'Base de datos del portal web de la empresa "Mar Caribe Center C.A." ';
                   admin    false    3463            �            1259    16714    accion    TABLE     n   CREATE TABLE public.accion (
    id_accion integer NOT NULL,
    nom_accion character varying(50) NOT NULL
);
    DROP TABLE public.accion;
       public         heap    postgres    false            �            1259    16713    accion_id_accion_seq    SEQUENCE     �   CREATE SEQUENCE public.accion_id_accion_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.accion_id_accion_seq;
       public          postgres    false    220            �           0    0    accion_id_accion_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.accion_id_accion_seq OWNED BY public.accion.id_accion;
          public          postgres    false    219            �            1259    16739 	   categoria    TABLE     w   CREATE TABLE public.categoria (
    id_categoria integer NOT NULL,
    nom_categoria character varying(50) NOT NULL
);
    DROP TABLE public.categoria;
       public         heap    postgres    false            �            1259    16738    categoria_id_categoria_seq    SEQUENCE     �   CREATE SEQUENCE public.categoria_id_categoria_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.categoria_id_categoria_seq;
       public          postgres    false    224            �           0    0    categoria_id_categoria_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.categoria_id_categoria_seq OWNED BY public.categoria.id_categoria;
          public          postgres    false    223            �            1259    16700    correo_electronico    TABLE     �   CREATE TABLE public.correo_electronico (
    id_correo integer NOT NULL,
    usuario_correo integer NOT NULL,
    correo character varying(255) NOT NULL
);
 &   DROP TABLE public.correo_electronico;
       public         heap    postgres    false            �            1259    16699     correo_electronico_id_correo_seq    SEQUENCE     �   CREATE SEQUENCE public.correo_electronico_id_correo_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 7   DROP SEQUENCE public.correo_electronico_id_correo_seq;
       public          postgres    false    218            �           0    0     correo_electronico_id_correo_seq    SEQUENCE OWNED BY     e   ALTER SEQUENCE public.correo_electronico_id_correo_seq OWNED BY public.correo_electronico.id_correo;
          public          postgres    false    217            �            1259    16762    entrada    TABLE       CREATE TABLE public.entrada (
    id_entrada integer NOT NULL,
    producto_entrada integer NOT NULL,
    usuario_entrada integer NOT NULL,
    cantidad character varying(50) NOT NULL,
    fecha_hora timestamp without time zone DEFAULT CURRENT_TIMESTAMP(0) NOT NULL
);
    DROP TABLE public.entrada;
       public         heap    postgres    false            �            1259    16761    entrada_id_entrada_seq    SEQUENCE     �   CREATE SEQUENCE public.entrada_id_entrada_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.entrada_id_entrada_seq;
       public          postgres    false    228            �           0    0    entrada_id_entrada_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.entrada_id_entrada_seq OWNED BY public.entrada.id_entrada;
          public          postgres    false    227            �            1259    16817    estatus    TABLE     q   CREATE TABLE public.estatus (
    id_estatus integer NOT NULL,
    nom_estatus character varying(50) NOT NULL
);
    DROP TABLE public.estatus;
       public         heap    postgres    false            �            1259    16816    estatus_id_estatus_seq    SEQUENCE     �   CREATE SEQUENCE public.estatus_id_estatus_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.estatus_id_estatus_seq;
       public          postgres    false    234            �           0    0    estatus_id_estatus_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.estatus_id_estatus_seq OWNED BY public.estatus.id_estatus;
          public          postgres    false    233            �            1259    16721 	   historial    TABLE     �   CREATE TABLE public.historial (
    id_historial integer NOT NULL,
    usuario_historial integer NOT NULL,
    fecha_hora timestamp without time zone DEFAULT CURRENT_TIMESTAMP(0) NOT NULL,
    accion_historial integer NOT NULL
);
    DROP TABLE public.historial;
       public         heap    postgres    false            �            1259    16720    historial_id_historial_seq    SEQUENCE     �   CREATE SEQUENCE public.historial_id_historial_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.historial_id_historial_seq;
       public          postgres    false    222            �           0    0    historial_id_historial_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.historial_id_historial_seq OWNED BY public.historial.id_historial;
          public          postgres    false    221            �            1259    16672    personal    TABLE       CREATE TABLE public.personal (
    id_personal integer NOT NULL,
    usuario_personal integer NOT NULL,
    nombre character varying(50) NOT NULL,
    apellido character varying(50) NOT NULL,
    cedula character varying(50) NOT NULL,
    direccion character varying(255) NOT NULL
);
    DROP TABLE public.personal;
       public         heap    postgres    false            �            1259    16671    personal_id_personal_seq    SEQUENCE     �   CREATE SEQUENCE public.personal_id_personal_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.personal_id_personal_seq;
       public          postgres    false    214            �           0    0    personal_id_personal_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.personal_id_personal_seq OWNED BY public.personal.id_personal;
          public          postgres    false    213            �            1259    16746    producto    TABLE     E  CREATE TABLE public.producto (
    id_producto integer NOT NULL,
    nombre character varying(50) NOT NULL,
    descripcion character varying(50),
    imagen text NOT NULL,
    precio character varying(50) NOT NULL,
    cantidad character varying(50) NOT NULL,
    categoria integer NOT NULL,
    estatus integer NOT NULL
);
    DROP TABLE public.producto;
       public         heap    postgres    false            �            1259    16745    producto_id_producto_seq    SEQUENCE     �   CREATE SEQUENCE public.producto_id_producto_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.producto_id_producto_seq;
       public          postgres    false    226            �           0    0    producto_id_producto_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.producto_id_producto_seq OWNED BY public.producto.id_producto;
          public          postgres    false    225            �            1259    16798 	   promocion    TABLE     5  CREATE TABLE public.promocion (
    id_promocion integer NOT NULL,
    producto_promocion integer NOT NULL,
    usuario_promocion integer NOT NULL,
    fecha_hora timestamp without time zone DEFAULT CURRENT_TIMESTAMP(0) NOT NULL,
    estatus integer NOT NULL,
    porcentaje character varying(50) NOT NULL
);
    DROP TABLE public.promocion;
       public         heap    postgres    false            �            1259    16797    promocion_id_promocion_seq    SEQUENCE     �   CREATE SEQUENCE public.promocion_id_promocion_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.promocion_id_promocion_seq;
       public          postgres    false    232            �           0    0    promocion_id_promocion_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.promocion_id_promocion_seq OWNED BY public.promocion.id_promocion;
          public          postgres    false    231            �            1259    16647    rol    TABLE     e   CREATE TABLE public.rol (
    id_rol integer NOT NULL,
    nom_rol character varying(50) NOT NULL
);
    DROP TABLE public.rol;
       public         heap    postgres    false            �            1259    16646    rol_id_rol_seq    SEQUENCE     �   CREATE SEQUENCE public.rol_id_rol_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.rol_id_rol_seq;
       public          postgres    false    210            �           0    0    rol_id_rol_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.rol_id_rol_seq OWNED BY public.rol.id_rol;
          public          postgres    false    209            �            1259    16780    salida    TABLE       CREATE TABLE public.salida (
    id_producto integer NOT NULL,
    producto_salida integer NOT NULL,
    usuario_salida integer NOT NULL,
    cantidad character varying(50) NOT NULL,
    fecha_hora timestamp without time zone DEFAULT CURRENT_TIMESTAMP(0) NOT NULL
);
    DROP TABLE public.salida;
       public         heap    postgres    false            �            1259    16779    salida_id_producto_seq    SEQUENCE     �   CREATE SEQUENCE public.salida_id_producto_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.salida_id_producto_seq;
       public          postgres    false    230            �           0    0    salida_id_producto_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.salida_id_producto_seq OWNED BY public.salida.id_producto;
          public          postgres    false    229            �            1259    16686    telefono    TABLE     �   CREATE TABLE public.telefono (
    id_telefono integer NOT NULL,
    usuario_telefono integer NOT NULL,
    telefono character varying(50) NOT NULL
);
    DROP TABLE public.telefono;
       public         heap    postgres    false            �            1259    16685    telefono_id_telefono_seq    SEQUENCE     �   CREATE SEQUENCE public.telefono_id_telefono_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.telefono_id_telefono_seq;
       public          postgres    false    216            �           0    0    telefono_id_telefono_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.telefono_id_telefono_seq OWNED BY public.telefono.id_telefono;
          public          postgres    false    215            �            1259    16656    usuario    TABLE     �   CREATE TABLE public.usuario (
    id_usuario integer NOT NULL,
    nom_usuario character varying(50) NOT NULL,
    contrasenia text NOT NULL,
    rol_usuario integer NOT NULL,
    estatus integer NOT NULL
);
    DROP TABLE public.usuario;
       public         heap    postgres    false            �            1259    16655    usuario_id_usuario_seq    SEQUENCE     �   CREATE SEQUENCE public.usuario_id_usuario_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.usuario_id_usuario_seq;
       public          postgres    false    212            �           0    0    usuario_id_usuario_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.usuario_id_usuario_seq OWNED BY public.usuario.id_usuario;
          public          postgres    false    211            �           2604    16717    accion id_accion    DEFAULT     t   ALTER TABLE ONLY public.accion ALTER COLUMN id_accion SET DEFAULT nextval('public.accion_id_accion_seq'::regclass);
 ?   ALTER TABLE public.accion ALTER COLUMN id_accion DROP DEFAULT;
       public          postgres    false    219    220    220            �           2604    16742    categoria id_categoria    DEFAULT     �   ALTER TABLE ONLY public.categoria ALTER COLUMN id_categoria SET DEFAULT nextval('public.categoria_id_categoria_seq'::regclass);
 E   ALTER TABLE public.categoria ALTER COLUMN id_categoria DROP DEFAULT;
       public          postgres    false    224    223    224            �           2604    16703    correo_electronico id_correo    DEFAULT     �   ALTER TABLE ONLY public.correo_electronico ALTER COLUMN id_correo SET DEFAULT nextval('public.correo_electronico_id_correo_seq'::regclass);
 K   ALTER TABLE public.correo_electronico ALTER COLUMN id_correo DROP DEFAULT;
       public          postgres    false    217    218    218            �           2604    16765    entrada id_entrada    DEFAULT     x   ALTER TABLE ONLY public.entrada ALTER COLUMN id_entrada SET DEFAULT nextval('public.entrada_id_entrada_seq'::regclass);
 A   ALTER TABLE public.entrada ALTER COLUMN id_entrada DROP DEFAULT;
       public          postgres    false    228    227    228            �           2604    16724    historial id_historial    DEFAULT     �   ALTER TABLE ONLY public.historial ALTER COLUMN id_historial SET DEFAULT nextval('public.historial_id_historial_seq'::regclass);
 E   ALTER TABLE public.historial ALTER COLUMN id_historial DROP DEFAULT;
       public          postgres    false    221    222    222            �           2604    16675    personal id_personal    DEFAULT     |   ALTER TABLE ONLY public.personal ALTER COLUMN id_personal SET DEFAULT nextval('public.personal_id_personal_seq'::regclass);
 C   ALTER TABLE public.personal ALTER COLUMN id_personal DROP DEFAULT;
       public          postgres    false    213    214    214            �           2604    16749    producto id_producto    DEFAULT     |   ALTER TABLE ONLY public.producto ALTER COLUMN id_producto SET DEFAULT nextval('public.producto_id_producto_seq'::regclass);
 C   ALTER TABLE public.producto ALTER COLUMN id_producto DROP DEFAULT;
       public          postgres    false    225    226    226            �           2604    16801    promocion id_promocion    DEFAULT     �   ALTER TABLE ONLY public.promocion ALTER COLUMN id_promocion SET DEFAULT nextval('public.promocion_id_promocion_seq'::regclass);
 E   ALTER TABLE public.promocion ALTER COLUMN id_promocion DROP DEFAULT;
       public          postgres    false    232    231    232            �           2604    16650 
   rol id_rol    DEFAULT     h   ALTER TABLE ONLY public.rol ALTER COLUMN id_rol SET DEFAULT nextval('public.rol_id_rol_seq'::regclass);
 9   ALTER TABLE public.rol ALTER COLUMN id_rol DROP DEFAULT;
       public          postgres    false    209    210    210            �           2604    16783    salida id_producto    DEFAULT     x   ALTER TABLE ONLY public.salida ALTER COLUMN id_producto SET DEFAULT nextval('public.salida_id_producto_seq'::regclass);
 A   ALTER TABLE public.salida ALTER COLUMN id_producto DROP DEFAULT;
       public          postgres    false    230    229    230            �           2604    16689    telefono id_telefono    DEFAULT     |   ALTER TABLE ONLY public.telefono ALTER COLUMN id_telefono SET DEFAULT nextval('public.telefono_id_telefono_seq'::regclass);
 C   ALTER TABLE public.telefono ALTER COLUMN id_telefono DROP DEFAULT;
       public          postgres    false    216    215    216            �           2604    16659    usuario id_usuario    DEFAULT     x   ALTER TABLE ONLY public.usuario ALTER COLUMN id_usuario SET DEFAULT nextval('public.usuario_id_usuario_seq'::regclass);
 A   ALTER TABLE public.usuario ALTER COLUMN id_usuario DROP DEFAULT;
       public          postgres    false    212    211    212            s          0    16714    accion 
   TABLE DATA           7   COPY public.accion (id_accion, nom_accion) FROM stdin;
    public          postgres    false    220   �       w          0    16739 	   categoria 
   TABLE DATA           @   COPY public.categoria (id_categoria, nom_categoria) FROM stdin;
    public          postgres    false    224   "�       q          0    16700    correo_electronico 
   TABLE DATA           O   COPY public.correo_electronico (id_correo, usuario_correo, correo) FROM stdin;
    public          postgres    false    218   _�       {          0    16762    entrada 
   TABLE DATA           f   COPY public.entrada (id_entrada, producto_entrada, usuario_entrada, cantidad, fecha_hora) FROM stdin;
    public          postgres    false    228   |�       �          0    16817    estatus 
   TABLE DATA           :   COPY public.estatus (id_estatus, nom_estatus) FROM stdin;
    public          postgres    false    234   ��       u          0    16721 	   historial 
   TABLE DATA           b   COPY public.historial (id_historial, usuario_historial, fecha_hora, accion_historial) FROM stdin;
    public          postgres    false    222   Ō       m          0    16672    personal 
   TABLE DATA           f   COPY public.personal (id_personal, usuario_personal, nombre, apellido, cedula, direccion) FROM stdin;
    public          postgres    false    214   �       y          0    16746    producto 
   TABLE DATA           r   COPY public.producto (id_producto, nombre, descripcion, imagen, precio, cantidad, categoria, estatus) FROM stdin;
    public          postgres    false    226   �                 0    16798 	   promocion 
   TABLE DATA           y   COPY public.promocion (id_promocion, producto_promocion, usuario_promocion, fecha_hora, estatus, porcentaje) FROM stdin;
    public          postgres    false    232   ��       i          0    16647    rol 
   TABLE DATA           .   COPY public.rol (id_rol, nom_rol) FROM stdin;
    public          postgres    false    210   ��       }          0    16780    salida 
   TABLE DATA           d   COPY public.salida (id_producto, producto_salida, usuario_salida, cantidad, fecha_hora) FROM stdin;
    public          postgres    false    230   �       o          0    16686    telefono 
   TABLE DATA           K   COPY public.telefono (id_telefono, usuario_telefono, telefono) FROM stdin;
    public          postgres    false    216   �       k          0    16656    usuario 
   TABLE DATA           ]   COPY public.usuario (id_usuario, nom_usuario, contrasenia, rol_usuario, estatus) FROM stdin;
    public          postgres    false    212   "�       �           0    0    accion_id_accion_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.accion_id_accion_seq', 1, false);
          public          postgres    false    219            �           0    0    categoria_id_categoria_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.categoria_id_categoria_seq', 2, true);
          public          postgres    false    223            �           0    0     correo_electronico_id_correo_seq    SEQUENCE SET     O   SELECT pg_catalog.setval('public.correo_electronico_id_correo_seq', 1, false);
          public          postgres    false    217            �           0    0    entrada_id_entrada_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.entrada_id_entrada_seq', 1, false);
          public          postgres    false    227            �           0    0    estatus_id_estatus_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.estatus_id_estatus_seq', 1, false);
          public          postgres    false    233            �           0    0    historial_id_historial_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.historial_id_historial_seq', 1, false);
          public          postgres    false    221            �           0    0    personal_id_personal_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.personal_id_personal_seq', 1, true);
          public          postgres    false    213            �           0    0    producto_id_producto_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.producto_id_producto_seq', 4, true);
          public          postgres    false    225            �           0    0    promocion_id_promocion_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.promocion_id_promocion_seq', 1, false);
          public          postgres    false    231            �           0    0    rol_id_rol_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.rol_id_rol_seq', 2, true);
          public          postgres    false    209            �           0    0    salida_id_producto_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.salida_id_producto_seq', 1, false);
          public          postgres    false    229            �           0    0    telefono_id_telefono_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.telefono_id_telefono_seq', 1, false);
          public          postgres    false    215            �           0    0    usuario_id_usuario_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.usuario_id_usuario_seq', 1, true);
          public          postgres    false    211            �           2606    16719    accion accion_pkey 
   CONSTRAINT     W   ALTER TABLE ONLY public.accion
    ADD CONSTRAINT accion_pkey PRIMARY KEY (id_accion);
 <   ALTER TABLE ONLY public.accion DROP CONSTRAINT accion_pkey;
       public            postgres    false    220            �           2606    16744    categoria categoria_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.categoria
    ADD CONSTRAINT categoria_pkey PRIMARY KEY (id_categoria);
 B   ALTER TABLE ONLY public.categoria DROP CONSTRAINT categoria_pkey;
       public            postgres    false    224            �           2606    16707 0   correo_electronico correo_electronico_correo_key 
   CONSTRAINT     m   ALTER TABLE ONLY public.correo_electronico
    ADD CONSTRAINT correo_electronico_correo_key UNIQUE (correo);
 Z   ALTER TABLE ONLY public.correo_electronico DROP CONSTRAINT correo_electronico_correo_key;
       public            postgres    false    218            �           2606    16705 *   correo_electronico correo_electronico_pkey 
   CONSTRAINT     o   ALTER TABLE ONLY public.correo_electronico
    ADD CONSTRAINT correo_electronico_pkey PRIMARY KEY (id_correo);
 T   ALTER TABLE ONLY public.correo_electronico DROP CONSTRAINT correo_electronico_pkey;
       public            postgres    false    218            �           2606    16768    entrada entrada_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.entrada
    ADD CONSTRAINT entrada_pkey PRIMARY KEY (id_entrada);
 >   ALTER TABLE ONLY public.entrada DROP CONSTRAINT entrada_pkey;
       public            postgres    false    228            �           2606    16822    estatus estatus_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.estatus
    ADD CONSTRAINT estatus_pkey PRIMARY KEY (id_estatus);
 >   ALTER TABLE ONLY public.estatus DROP CONSTRAINT estatus_pkey;
       public            postgres    false    234            �           2606    16727    historial historial_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.historial
    ADD CONSTRAINT historial_pkey PRIMARY KEY (id_historial);
 B   ALTER TABLE ONLY public.historial DROP CONSTRAINT historial_pkey;
       public            postgres    false    222            �           2606    16679    personal personal_cedula_key 
   CONSTRAINT     Y   ALTER TABLE ONLY public.personal
    ADD CONSTRAINT personal_cedula_key UNIQUE (cedula);
 F   ALTER TABLE ONLY public.personal DROP CONSTRAINT personal_cedula_key;
       public            postgres    false    214            �           2606    16677    personal personal_pkey 
   CONSTRAINT     ]   ALTER TABLE ONLY public.personal
    ADD CONSTRAINT personal_pkey PRIMARY KEY (id_personal);
 @   ALTER TABLE ONLY public.personal DROP CONSTRAINT personal_pkey;
       public            postgres    false    214            �           2606    16755    producto producto_nombre_key 
   CONSTRAINT     Y   ALTER TABLE ONLY public.producto
    ADD CONSTRAINT producto_nombre_key UNIQUE (nombre);
 F   ALTER TABLE ONLY public.producto DROP CONSTRAINT producto_nombre_key;
       public            postgres    false    226            �           2606    16753    producto producto_pkey 
   CONSTRAINT     ]   ALTER TABLE ONLY public.producto
    ADD CONSTRAINT producto_pkey PRIMARY KEY (id_producto);
 @   ALTER TABLE ONLY public.producto DROP CONSTRAINT producto_pkey;
       public            postgres    false    226            �           2606    16804    promocion promocion_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.promocion
    ADD CONSTRAINT promocion_pkey PRIMARY KEY (id_promocion);
 B   ALTER TABLE ONLY public.promocion DROP CONSTRAINT promocion_pkey;
       public            postgres    false    232            �           2606    16654    rol rol_nom_rol_key 
   CONSTRAINT     Q   ALTER TABLE ONLY public.rol
    ADD CONSTRAINT rol_nom_rol_key UNIQUE (nom_rol);
 =   ALTER TABLE ONLY public.rol DROP CONSTRAINT rol_nom_rol_key;
       public            postgres    false    210            �           2606    16652    rol rol_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.rol
    ADD CONSTRAINT rol_pkey PRIMARY KEY (id_rol);
 6   ALTER TABLE ONLY public.rol DROP CONSTRAINT rol_pkey;
       public            postgres    false    210            �           2606    16786    salida salida_pkey 
   CONSTRAINT     Y   ALTER TABLE ONLY public.salida
    ADD CONSTRAINT salida_pkey PRIMARY KEY (id_producto);
 <   ALTER TABLE ONLY public.salida DROP CONSTRAINT salida_pkey;
       public            postgres    false    230            �           2606    16691    telefono telefono_pkey 
   CONSTRAINT     ]   ALTER TABLE ONLY public.telefono
    ADD CONSTRAINT telefono_pkey PRIMARY KEY (id_telefono);
 @   ALTER TABLE ONLY public.telefono DROP CONSTRAINT telefono_pkey;
       public            postgres    false    216            �           2606    16693    telefono telefono_telefono_key 
   CONSTRAINT     ]   ALTER TABLE ONLY public.telefono
    ADD CONSTRAINT telefono_telefono_key UNIQUE (telefono);
 H   ALTER TABLE ONLY public.telefono DROP CONSTRAINT telefono_telefono_key;
       public            postgres    false    216            �           2606    16665    usuario usuario_nom_usuario_key 
   CONSTRAINT     a   ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_nom_usuario_key UNIQUE (nom_usuario);
 I   ALTER TABLE ONLY public.usuario DROP CONSTRAINT usuario_nom_usuario_key;
       public            postgres    false    212            �           2606    16663    usuario usuario_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (id_usuario);
 >   ALTER TABLE ONLY public.usuario DROP CONSTRAINT usuario_pkey;
       public            postgres    false    212            �           2606    16733    historial fk_accion_historial    FK CONSTRAINT     �   ALTER TABLE ONLY public.historial
    ADD CONSTRAINT fk_accion_historial FOREIGN KEY (accion_historial) REFERENCES public.accion(id_accion) ON DELETE SET DEFAULT;
 G   ALTER TABLE ONLY public.historial DROP CONSTRAINT fk_accion_historial;
       public          postgres    false    3261    220    222            �           2606    16756    producto fk_categoria_producto    FK CONSTRAINT     �   ALTER TABLE ONLY public.producto
    ADD CONSTRAINT fk_categoria_producto FOREIGN KEY (categoria) REFERENCES public.categoria(id_categoria) ON DELETE SET DEFAULT;
 H   ALTER TABLE ONLY public.producto DROP CONSTRAINT fk_categoria_producto;
       public          postgres    false    224    3265    226            �           2606    16823    producto fk_estatus_producto    FK CONSTRAINT     �   ALTER TABLE ONLY public.producto
    ADD CONSTRAINT fk_estatus_producto FOREIGN KEY (estatus) REFERENCES public.estatus(id_estatus);
 F   ALTER TABLE ONLY public.producto DROP CONSTRAINT fk_estatus_producto;
       public          postgres    false    3277    226    234            �           2606    16828    usuario fk_estatus_usuario    FK CONSTRAINT     �   ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT fk_estatus_usuario FOREIGN KEY (estatus) REFERENCES public.estatus(id_estatus);
 D   ALTER TABLE ONLY public.usuario DROP CONSTRAINT fk_estatus_usuario;
       public          postgres    false    212    3277    234            �           2606    16769    entrada fk_producto_entrada    FK CONSTRAINT     �   ALTER TABLE ONLY public.entrada
    ADD CONSTRAINT fk_producto_entrada FOREIGN KEY (producto_entrada) REFERENCES public.producto(id_producto) ON DELETE CASCADE;
 E   ALTER TABLE ONLY public.entrada DROP CONSTRAINT fk_producto_entrada;
       public          postgres    false    228    226    3269            �           2606    16805    promocion fk_producto_promocion    FK CONSTRAINT     �   ALTER TABLE ONLY public.promocion
    ADD CONSTRAINT fk_producto_promocion FOREIGN KEY (producto_promocion) REFERENCES public.producto(id_producto) ON DELETE CASCADE;
 I   ALTER TABLE ONLY public.promocion DROP CONSTRAINT fk_producto_promocion;
       public          postgres    false    232    3269    226            �           2606    16787    salida fk_producto_salida    FK CONSTRAINT     �   ALTER TABLE ONLY public.salida
    ADD CONSTRAINT fk_producto_salida FOREIGN KEY (producto_salida) REFERENCES public.producto(id_producto) ON DELETE CASCADE;
 C   ALTER TABLE ONLY public.salida DROP CONSTRAINT fk_producto_salida;
       public          postgres    false    230    226    3269            �           2606    16666    usuario fk_rol_usuario    FK CONSTRAINT     �   ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT fk_rol_usuario FOREIGN KEY (rol_usuario) REFERENCES public.rol(id_rol) ON DELETE CASCADE;
 @   ALTER TABLE ONLY public.usuario DROP CONSTRAINT fk_rol_usuario;
       public          postgres    false    212    3243    210            �           2606    16708 $   correo_electronico fk_usuario_correo    FK CONSTRAINT     �   ALTER TABLE ONLY public.correo_electronico
    ADD CONSTRAINT fk_usuario_correo FOREIGN KEY (usuario_correo) REFERENCES public.usuario(id_usuario) ON DELETE CASCADE;
 N   ALTER TABLE ONLY public.correo_electronico DROP CONSTRAINT fk_usuario_correo;
       public          postgres    false    218    212    3247            �           2606    16774    entrada fk_usuario_entrada    FK CONSTRAINT     �   ALTER TABLE ONLY public.entrada
    ADD CONSTRAINT fk_usuario_entrada FOREIGN KEY (usuario_entrada) REFERENCES public.usuario(id_usuario) ON DELETE CASCADE;
 D   ALTER TABLE ONLY public.entrada DROP CONSTRAINT fk_usuario_entrada;
       public          postgres    false    212    3247    228            �           2606    16728    historial fk_usuario_historial    FK CONSTRAINT     �   ALTER TABLE ONLY public.historial
    ADD CONSTRAINT fk_usuario_historial FOREIGN KEY (usuario_historial) REFERENCES public.usuario(id_usuario) ON DELETE CASCADE;
 H   ALTER TABLE ONLY public.historial DROP CONSTRAINT fk_usuario_historial;
       public          postgres    false    3247    212    222            �           2606    16680    personal fk_usuario_personal    FK CONSTRAINT     �   ALTER TABLE ONLY public.personal
    ADD CONSTRAINT fk_usuario_personal FOREIGN KEY (usuario_personal) REFERENCES public.usuario(id_usuario) ON DELETE CASCADE;
 F   ALTER TABLE ONLY public.personal DROP CONSTRAINT fk_usuario_personal;
       public          postgres    false    214    3247    212            �           2606    16810    promocion fk_usuario_promocion    FK CONSTRAINT     �   ALTER TABLE ONLY public.promocion
    ADD CONSTRAINT fk_usuario_promocion FOREIGN KEY (usuario_promocion) REFERENCES public.usuario(id_usuario) ON DELETE CASCADE;
 H   ALTER TABLE ONLY public.promocion DROP CONSTRAINT fk_usuario_promocion;
       public          postgres    false    212    3247    232            �           2606    16792    salida fk_usuario_salida    FK CONSTRAINT     �   ALTER TABLE ONLY public.salida
    ADD CONSTRAINT fk_usuario_salida FOREIGN KEY (usuario_salida) REFERENCES public.usuario(id_usuario) ON DELETE CASCADE;
 B   ALTER TABLE ONLY public.salida DROP CONSTRAINT fk_usuario_salida;
       public          postgres    false    3247    212    230            �           2606    16694    telefono fk_usuario_telefono    FK CONSTRAINT     �   ALTER TABLE ONLY public.telefono
    ADD CONSTRAINT fk_usuario_telefono FOREIGN KEY (usuario_telefono) REFERENCES public.usuario(id_usuario) ON DELETE CASCADE;
 F   ALTER TABLE ONLY public.telefono DROP CONSTRAINT fk_usuario_telefono;
       public          postgres    false    216    212    3247            s      x������ � �      w   -   x�3�(�O)M.�Wp���M�+�L���2�tJM�LI����� �G      q      x������ � �      {      x������ � �      �      x�3���KL.�,��2�t�0b���� a�      u      x������ � �      m   +   x�3�4������t�O�44422266�tN��IU0����� �T�      y   k   x�-�;
�0��zr�=���z�4�"�fIჰ����?|��kW�Y�xX�L�r�Vǹ�k��`c�S�)
����;�,�9t��5�ۮ���Ĉ�毺��2Ƽ&0"�            x������ � �      i   #   x�3��/H-JL�/�2�tL����,.��c���� �.	�      }      x������ � �      o      x������ � �      k      x�3�LL��̃����\1z\\\ Md|     