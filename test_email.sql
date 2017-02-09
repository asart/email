
-- Хост: localhost
-- Время создания: Фев 09 2017 г., 18:27
-- Версия сервера: 5.7.17-0ubuntu0.16.04.1
-- Версия PHP: 5.6.30-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_email`
--

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `email`) VALUES
(1, 'vasiliy@mail.ru'),
(2, 'alex@gmial.com'),
(3, 'boris@mail.ru'),
(4, 'valera@gmail.com'),
(5, 'sdrt@rest.com'),
(6, 'alex2@gmail.com'),
(7, 'boris2@mail.ru'),
(8, 'adrev@gmail.com'),
(9, 'vasiliy2@mail.ru'),
(10, 'sdrt2@rest.com'),
(11, 'adrev2@gmail.com'),
(12, 'valera2@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_info`
--

INSERT INTO `user_info` (`id`, `user_id`, `name`, `sname`) VALUES
(1, 1, 'Василий', 'Петрович'),
(2, 2, 'Алекс', 'Васильевич'),
(3, 3, 'Борис', 'борисович'),
(4, 4, 'Валера', 'Валерьевич'),
(5, 5, 'Семен', 'Семеныч'),
(6, 6, 'Александр', 'Семеныч'),
(7, 7, 'Борис', 'Анатоьевич'),
(8, 8, 'Андрей', 'Валерьвич'),
(9, 9, 'Васильй', 'Сергеевич'),
(10, 10, 'Анна', 'Петровна'),
(11, 11, 'Андрей', 'Иванович'),
(12, 12, 'Валерий', 'Анреевич');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `user_info_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
