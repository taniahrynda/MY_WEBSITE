USE WEBSITE

-- �������� �������� ���������� ��� �����: �����, �����, ���� --
SELECT NAME, FIRSTNAME, LASTNAME, PRICE 
FROM BOOK, AUTHOR
WHERE AUTHOR_ID=AUTHOR.ID

-- �������� ��� ����, �� �������� �� �������� ��������� � --
SELECT NAME
FROM BOOK, CATEGORY
WHERE CATEGORY_ID=CATEGORY.ID
AND TYPY_OF_BOOK IN ('������� ���������')

-- �������� ���� ��������� ����� � --
SELECT NAME
FROM BOOK, CATEGORY
WHERE CATEGORY_ID=CATEGORY.ID
AND LANGUAGE_BOOK IN ('ͳ������')

-- �������� ����, �� ����� ������ � --
SELECT NAME
FROM BOOK, CATEGORY
WHERE CATEGORY_ID=CATEGORY.ID
AND FORMAT_BOOK IN ('����������')

-- ������ ����, �� ������� ������� �볺��� � � ���� --

SELECT NAME, COUNT(*) AS COUNT_BOOK
FROM BOOK JOIN ORDERS
ON BOOK_ID=BOOK.ID
JOIN CUCTOMER ON CATEGORY_ID=CUCTOMER.ID
WHERE YEAR(DATE_ORDER)=2020
GROUP BY NAME
ORDER BY COUNT_BOOK DESC

-- C����� �� ����, �� ����� �������� � � ������ �� ��������--
SELECT FIRSTNAME, LASTNAME, NAME, SUM(AMOUNT) AS TOTAL_PRICE
FROM CUCTOMER JOIN ORDERS
ON CUSTOMER_ID=CUCTOMER.ID
JOIN BOOK ON BOOK_ID=BOOK.ID
WHERE CUCTOMER.ID=5
GROUP BY FIRSTNAME, LASTNAME, NAME

--������� ��������--
SELECT TYPY_OF_BOOK, SUM(NUMBERS) AS TOTAL_NUMBERS  
FROM BOOK JOIN CATEGORY
ON CATEGORY_ID=CATEGORY.ID
JOIN ORDERS ON BOOK.ID=BOOK_ID
GROUP BY TYPY_OF_BOOK
ORDER BY TOTAL_NUMBERS DESC

SELECT TYPY_OF_BOOK, LANGUAGE_BOOK, FORMAT_BOOK, SUM(NUMBERS) AS TOTAL_NUMBERS  
FROM BOOK JOIN CATEGORY
ON CATEGORY_ID=CATEGORY.ID
JOIN ORDERS ON BOOK.ID=BOOK_ID
GROUP BY TYPY_OF_BOOK, LANGUAGE_BOOK, FORMAT_BOOK
ORDER BY TOTAL_NUMBERS DESC

-- ������ �볺���, �� ������� � �������� ����� 5 ����--
SELECT FIRSTNAME, LASTNAME, COUNT(*) AS ORDERS_COUNT
FROM CUCTOMER JOIN ORDERS
ON CUSTOMER_ID=CUCTOMER.ID
GROUP BY FIRSTNAME, LASTNAME
HAVING COUNT(*) > 5


--��������� ��������--


-- ʳ������ �������� ���� � ������ � � ����--
SELECT  NAME, COUNT(*) AS NUMBER_ORDERS
FROM AUTHOR JOIN BOOK
ON AUTHOR_ID=AUTHOR.ID
JOIN ORDERS ON BOOK_ID=BOOK.ID
WHERE LASTNAME ='��������' AND YEAR(DATE_ORDER)=2021
GROUP BY NAME

--�������, ��� ������ ����� ����� ���� ������� ����� 5 ����--
SELECT FIRSTNAME, LASTNAME, COUNT (NUMBERS) AS COUNT_NUMBERS
FROM AUTHOR JOIN BOOK
ON AUTHOR_ID=AUTHOR.ID
JOIN ORDERS ON BOOK_ID=BOOK.ID
GROUP BY FIRSTNAME, LASTNAME
HAVING COUNT (NUMBERS)>5

--���������� ��������� ������ � ���� ���� ������--

SELECT CITY, COUNT(*) AS ORDERS_COUNT
FROM BOOK JOIN ORDERS
ON BOOK_ID=ORDERS.ID
JOIN CUCTOMER ON CUSTOMER_ID=ORDERS.ID
GROUP BY CITY
-- ���������� ������� ������ ����� ��������--

SELECT TYPY_OF_BOOK, LANGUAGE_BOOK, FORMAT_BOOK, COUNT(*) AS ORDERS_COUNT
FROM CATEGORY JOIN BOOK
ON CATEGORY_ID=CATEGORY.ID
JOIN ORDERS ON BOOK_ID=BOOK.ID
GROUP BY TYPY_OF_BOOK, LANGUAGE_BOOK, FORMAT_BOOK

-- �������� �����, �� ����� �� �����--
SELECT NAME
FROM BOOK
WHERE NOT EXISTS(
SELECT * FROM ORDERS
WHERE BOOK_ID=BOOK.ID)


-- �������� ������ �볺���, � ���� ���� ������� �������� 1000 ��� --
SELECT FIRSTNAME, LASTNAME, ��������_����_�������
FROM 
(SELECT FIRSTNAME, LASTNAME, SUM(AMOUNT) AS  ��������_����_�������
FROM CUCTOMER JOIN ORDERS
ON CUSTOMER_ID=CUCTOMER.ID
GROUP BY FIRSTNAME, LASTNAME
) AS ϲ������
WHERE ��������_����_�������>1000

-- ���������� ������� ���� ����� ������������ �� �����--
SELECT YEAR_ORDER, NAME, ʲ��ʲ���_���������, ����_���������
FROM(SELECT YEAR(DATE_ORDER) AS YEAR_ORDER, PUBLICATION.NAME AS NAME, SUM(NUMBERS) AS [ʲ��ʲ���_���������], SUM(AMOUNT) AS [����_���������]
FROM PUBLICATION JOIN BOOK
ON PUBLICATION_ID=PUBLICATION.ID
JOIN ORDERS ON BOOK_ID=BOOK.ID
GROUP BY PUBLICATION.NAME, YEAR(DATE_ORDER))
AS ϲ������

-- ���������� ������� ���� � ���� ���� � � ����--
SELECT YEAR_ORDER, CITY, ʲ��ʲ���_���������, ����_���������
FROM(SELECT YEAR(DATE_ORDER) AS YEAR_ORDER, CITY, SUM(NUMBERS) AS [ʲ��ʲ���_���������], SUM(AMOUNT) AS [����_���������]
FROM CUCTOMER JOIN ORDERS
ON CUSTOMER_ID=CUCTOMER.ID
WHERE YEAR(DATE_ORDER)=2021
GROUP BY CITY, YEAR(DATE_ORDER) )
AS ϲ������

-- ������ ���� ������ ����� ���������--
SELECT FIRSTNAME, LASTNAME, TOTAL
FROM(SELECT FIRSTNAME, LASTNAME, SUM(NUMBERS) AS TOTAL
FROM
EMPLOYEE JOIN ORDERS
ON EMPLOYEE_ID=EMPLOYEE.ID
GROUP BY FIRSTNAME, LASTNAME) AS ϲ������

