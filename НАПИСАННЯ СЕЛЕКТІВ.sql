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
