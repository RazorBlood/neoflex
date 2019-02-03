-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 03 2019 г., 20:23
-- Версия сервера: 5.6.41
-- Версия PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `neoflex`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`, `author_id`) VALUES
(1, 'Вербное воскресенье', 'Вербное воскресенье отмечается в последнее воскресенье перед Пасхой. В этот день Господь въехал в Иерусалим на ослике, уже зная о том, что там он будет предан на крестную смерть. Накануне, в субботу, в маленьком селении Вифания он воскресил умершего от болезни своего друга Лазаря', 1),
(2, 'Гергёв день', 'Болгарская деревушка Рибариште - не большая и не маленькая, таких много разбросано по пологим склонам Родопских гор. И люди здесь живут обычные, и песни поют те же, что и соседи, табак тот же сажают, и пшеницу, и виноград. Разве что пастухов здесь больше - окрестные горные луга с сочной травой как будто специально созданы природой, чтобы овцы на них паслись да вес набирали. Деревня - чабанская, и самый главный праздник здесь - Гергёв день', 2),
(3, 'Герревол', 'Рано утром, когда первые лучи солнца позолотят спутанную гриву джунглей, на пустынной поляне можно увидеть странную картину. Молодые парни в вышитой цветными нитками одежде, обвешанные амулетами и с тщательно разрисованными лицами, группами по тридцать человек стоят, застыв, как изваяния, сияя ослепительными улыбками. Так начинается Герревол - Праздник красоты', 3),
(4, 'День Благодарения', '9 ноября 1620 года корабль \"Мэйфлауер\" (\"Майский цветок\") высадил пилигримов на мысе Кейд-Код, что тянется вдоль побережья Массачусетского залива. Ранней осенью колонисты собрали свой первый урожай. Они устроили праздник, на который пригласили своих друзей-индейцев, и назвали его Благодарение. Первое Благодарение затянулось на целых три дня, в течение которых пилигримы и их гости угощались жареной индейкой, тыквой и кукурузой', 4),
(5, 'День Ивана Купалы', 'На Руси праздновать день Ивана Купалы начинали ещё накануне - в день Аграфены Купальницы. Утром этого дня девушки ходили собирать травы, а особым уважением у них пользовалась купальница, которую ещё называют \"кошачьей дрёмой\". Её старались набрать, пока она покрыта утренней росою, а потом вплетали её в веники и вили из неё венки.', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `article_rubric`
--

CREATE TABLE `article_rubric` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `rubric_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `article_rubric`
--

INSERT INTO `article_rubric` (`id`, `article_id`, `rubric_id`) VALUES
(9, 1, 3),
(10, 2, 5),
(11, 2, 4),
(12, 2, 1),
(13, 5, 4),
(14, 1, 2),
(15, 3, 4),
(16, 4, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `patronymic` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id`, `name`, `patronymic`, `surname`) VALUES
(1, 'Иосиф', 'Авдеевич', 'Наумов'),
(2, 'Руслан', 'Владимирович', 'Доронин'),
(3, 'Тимур', 'Мартынович', 'Котов '),
(4, 'Артур', 'Васильевич', 'Королёв');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `rubrics`
--

CREATE TABLE `rubrics` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rubrics`
--

INSERT INTO `rubrics` (`id`, `name`) VALUES
(1, 'Масленица'),
(2, 'Футбол'),
(3, 'Новый год'),
(4, 'Баскетбол'),
(5, 'Кулачные бои'),
(6, '23 февраля');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`);

--
-- Индексы таблицы `article_rubric`
--
ALTER TABLE `article_rubric`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rubrics`
--
ALTER TABLE `rubrics`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблицы `article_rubric`
--
ALTER TABLE `article_rubric`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `rubrics`
--
ALTER TABLE `rubrics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
