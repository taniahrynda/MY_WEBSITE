USE WEBSITE

-- Перегляд наступної інформації про книги: назва, автор, ціна --
SELECT NAME, FIRSTNAME, LASTNAME, PRICE 
FROM BOOK, AUTHOR
WHERE AUTHOR_ID=AUTHOR.ID

-- Перегляд усіх книг, що належать до різновиду літератири Х --
SELECT NAME
FROM BOOK, CATEGORY
WHERE CATEGORY_ID=CATEGORY.ID
AND TYPY_OF_BOOK IN ('Художня література')

-- Перегляд книг написаних мовою Х --
SELECT NAME
FROM BOOK, CATEGORY
WHERE CATEGORY_ID=CATEGORY.ID
AND LANGUAGE_BOOK IN ('Німецька')

-- Перегляд книг, що мають формат Х --
SELECT NAME
FROM BOOK, CATEGORY
WHERE CATEGORY_ID=CATEGORY.ID
AND FORMAT_BOOK IN ('Електронна')

-- Список книг, які найчасті купляли клієнти в Х році --
