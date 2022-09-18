-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2022 at 03:15 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `starwars`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `pwd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `uname`, `pwd`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `alienraces`
--

CREATE TABLE `alienraces` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `imgPath` varchar(200) NOT NULL,
  `userId` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alienraces`
--

INSERT INTO `alienraces` (`id`, `name`, `description`, `imgPath`, `userId`) VALUES
(1, 'Chagrian', 'Chagrians were an amphibious sentient species of tall, horned humanoids with blue skin that were native to the planet Champala. They were distinguished by two fleshy head tentacles protruding from the back side of their skull, wrapping down over their shoulders and ending in brownish-tipped horns.', 'chagrian.webp', 1),
(2, 'Wookiee', 'Shaggy giants from an arboreal world, the tall and commanding Wookiee species is an impressive sight to even the most jaded spacer. Despite their fearsome and savage countenance, Wookiees are intelligent, sophisticated, loyal and trusting. Loyalty and bravery are near-sacred tenets in Wookiee society. When peaceful, Wookiees are tender and gentle. Their tempers, however, are short; when angered, Wookiees can fly into a berserker rage and will not stop until the object of their distemper is sufficiently destroyed.', 'wookiee.jpeg', 1),
(3, 'Weequay', 'Weequays have rough, wrinkled skin, often in a brown hue who wear their hair in a topknot; Hondo Ohnaka led a band of Weequay pirates during the time of the Clone Wars.', 'weequay.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `imgPath` varchar(200) NOT NULL,
  `userId` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`id`, `name`, `description`, `imgPath`, `userId`) VALUES
(1, 'Darth Vader', 'Once the heroic Jedi Knight named Anakin Skywalker, Darth Vader was seduced by the dark side of the Force. Forever scarred by his defeat on Mustafar, Vader was transformed into a cybernetically-enhanced Sith Lord. At the dawn of the Empire, Vader led the Empire’s eradication of the Jedi Order and the search for survivors. He remained in service of the Emperor -- the evil Darth Sidious -- for decades, enforcing his Master’s will and seeking to crush the Rebel Alliance and other detractors. But there was still good in him…', 'darth1.jpeg', 1),
(2, 'Luke Skywalker ', 'Luke Skywalker was a Tatooine farmboy who rose from humble beginnings to become one of the greatest Jedi the galaxy has ever known. Along with his friends Princess Leia and Han Solo, Luke battled the evil Empire, discovered the truth of his parentage, and ended the tyranny of the Sith. A generation later, the location of the famed Jedi master was one of the galaxy’s greatest mysteries. Haunted by Ben Solo’s fall to evil and convinced the Jedi had to end, Luke sought exile on a distant world, ignoring the galaxy’s pleas for help. But his solitude would be interrupted – and Luke Skywalker had one final, momentous role to play in the struggle between good and evil.', 'luke1.webp', 1),
(3, 'Han Solo', 'Han Solo rose from an impoverished childhood on the mean streets of Corellia to become one of the heroes of the Rebel Alliance. As captain of the Millennium Falcon, Han and his co-pilot Chewbacca came to believe in the cause of galactic freedom, joining Luke Skywalker and Princess Leia Organa in the fight against the Empire. After the Battle of Endor, Han faced difficult times in a chaotic galaxy, leading to a shattering confrontation with his estranged son Ben.', 'han1.jpeg', 1),
(9, 'Han Solo', 'Han Solo rose from an impoverished childhood on the mean streets of Corellia to become one of the heroes of the Rebel Alliance. As captain of the Millennium Falcon, Han and his co-pilot Chewbacca came to believe in the cause of galactic freedom, joining Luke Skywalker and Princess Leia Organa in the fight against the Empire. After the Battle of Endor, Han faced difficult times in a chaotic galaxy, leading to a shattering confrontation with his estranged son Ben.', 'han1.jpeg', 1),
(10, 'Han Solo', 'Han Solo rose from an impoverished childhood on the mean streets of Corellia to become one of the heroes of the Rebel Alliance. As captain of the Millennium Falcon, Han and his co-pilot Chewbacca came to believe in the cause of galactic freedom, joining Luke Skywalker and Princess Leia Organa in the fight against the Empire. After the Battle of Endor, Han faced difficult times in a chaotic galaxy, leading to a shattering confrontation with his estranged son Ben.', 'han1.jpeg', 1),
(11, 'Han Solo', 'Han Solo rose from an impoverished childhood on the mean streets of Corellia to become one of the heroes of the Rebel Alliance. As captain of the Millennium Falcon, Han and his co-pilot Chewbacca came to believe in the cause of galactic freedom, joining Luke Skywalker and Princess Leia Organa in the fight against the Empire. After the Battle of Endor, Han faced difficult times in a chaotic galaxy, leading to a shattering confrontation with his estranged son Ben.', 'han1.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `imgPath` varchar(200) NOT NULL,
  `userId` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`, `imgPath`, `userId`) VALUES
(1, 'Star Wars (1977)', 'Star Wars (retroactively titled Star Wars: Episode IV – A New Hope) is a 1977 American epic space-opera film written and directed by George Lucas, produced by Lucasfilm and distributed by 20th Century Fox. It is the first film in the Star Wars film series and fourth chronological chapter of the \"Skywalker Saga\". Set \"a long time ago\" in a fictional universe where the galaxy is ruled by the tyrannical Galactic Empire, the story focuses on a group of freedom fighters known as the Rebel Alliance, who aim to destroy the Empire\'s newest weapon, the Death Star. Luke Skywalker becomes caught in the conflict while learning the ways of a metaphysical power known as \"the Force\" from Jedi Master Obi-Wan Kenobi. The cast includes Mark Hamill, Harrison Ford, Carrie Fisher, Peter Cushing, Alec Guinness, David Prowse, James Earl Jones, Anthony Daniels, Kenny Baker, and Peter Mayhew.\r\n\r\nLucas had the idea for a science-fiction film in the vein of Flash Gordon around the time he completed his first film, THX 1138 (1971) and began working on a treatment after the release of American Graffiti (1973). After numerous rewrites, filming took place throughout 1976 in locations including Tunisia and Elstree Studios in Hertfordshire, England. The film suffered production difficulties; cast and crew involved believed the film would be a failure. Lucas formed the production company Industrial Light & Magic to help create the film\'s special effects. It also went $3 million over budget due to multiple delays.\r\n\r\nStar Wars was released in a limited number of theaters in the United States on May 25, 1977 and quickly became a blockbuster hit, leading to it being expanded to a much wider release. The film opened to critical acclaim for its acting, direction, story, musical score, sound, editing, screenplay, costume design, and production values, but particularly for its groundbreaking visual effects. It grossed over $550 million during its initial run, surpassing Jaws (1975) to become the highest-grossing film until the release of E.T. the Extra-Terrestrial (1982); subsequent releases brought its total gross to $775 million. When adjusted for inflation, Star Wars is the second-highest-grossing film in North America (behind Gone with the Wind) and the fourth-highest-grossing film of all time. It received numerous awards at the Academy Awards, BAFTA Awards, Saturn Awards, among others.\r\n\r\nThe film has been reissued many times with Lucas\'s support—most significantly with its 20th-anniversary theatrical \"Special Edition\"—incorporating many changes including modified computer-generated effects, altered dialogue, re-edited shots, remixed soundtracks and added scenes. Often regarded as one of the greatest films of all time, the film became a pop-cultural phenomenon, launching an industry of tie-in products, including novels, comics, video games, amusement park attractions and merchandise including toys, games, and clothing. It became one of the first 25 films selected by the United States Library of Congress for preservation in the National Film Registry in 1989, while its soundtrack was added to the U.S. National Recording Registry in 2004. The Empire Strikes Back (1980) and Return of the Jedi (1983) followed Star Wars, rounding out the original Star Wars trilogy. A prequel and a sequel trilogy have since been released, in addition to two anthology films and various television series. ', '1.webp', 1),
(2, 'The Empire Strikes Back (1980)', 'The Empire Strikes Back (also known as Star Wars: Episode V – The Empire Strikes Back) is a 1980 American epic space-opera film directed by Irvin Kershner from a screenplay by Leigh Brackett and Lawrence Kasdan, based on a story by George Lucas. The sequel to Star Wars (1977),[b] it is the second film in the Star Wars film series and the fifth chronological chapter of the \"Skywalker Saga\". Set three years after the events of Star Wars, the film recounts the battle between the malevolent Galactic Empire, led by the Emperor, and the Rebel Alliance, led by Princess Leia. Luke Skywalker trains to master the Force so he can confront the powerful Sith lord, Darth Vader. The ensemble cast includes Mark Hamill, Harrison Ford, Carrie Fisher, Billy Dee Williams, Anthony Daniels, David Prowse, Kenny Baker, Peter Mayhew, and Frank Oz.\r\n\r\nFollowing the success of Star Wars, Lucas hired Brackett to write the sequel. Following her death in 1978, he outlined the whole Star Wars saga and wrote the next draft himself, before hiring Raiders of the Lost Ark (1981) writer Kasdan to enhance his work. To avoid the stress he faced directing Star Wars, Lucas handed this responsibility to Kershner and focused on expanding his special effects company Industrial Light & Magic instead. Filmed from March to September 1979 in Finse, Norway, and at Elstree Studios in England, The Empire Strikes Back faced production difficulties, including actor injuries, illnesses, fires, and problems securing additional financing as costs rose. Initially budgeted at $8 million, costs had risen to $30.5 million by the project\'s conclusion.\r\n\r\nReleased on May 21, 1980, the highly anticipated sequel became the highest-grossing film that year, earning approximately $401.5 million worldwide. Unlike its predecessor, Empire was met with mixed reviews from critics and fans conflicted over its darker and more mature themes compared to the light-hearted adventure of Star Wars. Critics praised the puppeteered character Yoda, a diminutive alien who serves as Luke\'s teacher, for having expressive features and characterization. The film was nominated for various awards and won two Academy Awards, two Grammy Awards, and a BAFTA, among others. Subsequent releases have raised the film\'s worldwide gross to $538–549 million and, adjusted for inflation, it is the thirteenth-highest-grossing film in the United States and Canada.\r\n\r\nSince its release, The Empire Strikes Back has been critically reassessed and is now often regarded as the best film in the Star Wars series and among the greatest films ever made. It has had a significant impact on filmmaking and popular culture and is often considered an example of a sequel superior to its predecessor. The climax, in which Vader reveals he is Luke\'s father, is often ranked as one of the greatest plot twists in cinema. The film spawned a variety of merchandise and adaptations, including video games and a radio play. The United States Library of Congress selected it for preservation in the National Film Registry in 2010. Return of the Jedi (1983) followed Empire, concluding the original Star Wars trilogy. Prequel and sequel trilogies that round out the \"Skywalker saga\" have since been released. ', '2.webp', 1),
(3, 'Return of the Jedi (1983)', 'Return of the Jedi (also known as Star Wars: Episode VI – Return of the Jedi) is a 1983 American epic space-opera film directed by Richard Marquand. The screenplay is by Lawrence Kasdan and George Lucas from a story by Lucas, who was also the executive producer. The sequel to Star Wars (1977)[a] and The Empire Strikes Back (1980), it is the third installment in the original Star Wars trilogy, the third film to be produced, and the sixth chronological film in the \"Skywalker Saga\". The film stars Mark Hamill, Harrison Ford, Carrie Fisher, Billy Dee Williams, Anthony Daniels, David Prowse, Kenny Baker, Peter Mayhew and Frank Oz.\r\n\r\nSet one year after The Empire Strikes Back, the Galactic Empire is constructing a second Death Star to exterminate the Rebel Alliance. With intel that the Emperor will be onboard, the Rebel Fleet launches a full-scale attack on the Death Star in hopes of both destroying it and the Emperor. Meanwhile, Rebel hero Luke Skywalker, now a Jedi Knight, struggles to bring his father, Darth Vader, back to the light side of the Force.\r\n\r\nFollowing Lucas and Kasdan\'s discussion on making Return of the Jedi, the film went into production. Steven Spielberg, David Lynch and David Cronenberg were considered to direct the project before Marquand signed on as director. The production team relied on Lucas\' storyboards during pre-production. While writing the shooting script, Lucas, Kasdan, Marquand, and producer Howard Kazanjian spent two weeks in conference discussing ideas to construct it. Kazanjian\'s schedule pushed shooting to begin a few weeks early to allow Industrial Light & Magic more time to work on the film\'s effects in post-production. Filming took place in England, California, and Arizona from January to May 1982.\r\n\r\nThe film was released in theaters on May 25, 1983, to positive reviews, with critics praising the performances, action sequences, emotional weight, and it’s conclusion to The Original Trilogy , but is considered the weakest of the Original Trilogy . It grossed $374 million during its initial theatrical run, becoming the highest-grossing film of 1983. Several re-releases and revisions to the film have followed over the decades, which has also brought its total gross to $475 million. The United States Library of Congress selected it for preservation in the National Film Registry in 2021. After Lucas finished his six-film saga by making the prequel trilogy, Disney purchased Lucasfilm and produced a sequel trilogy. Additionally, it released The Mandalorian, the first live-action television series in the franchise, for the streaming service Disney+. The series and its spin-offs are set five years after Return of the Jedi. ', '3.webp', 1),
(56, 'new 1', 'new1', 'new1     ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `planets`
--

CREATE TABLE `planets` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `imgPath` varchar(200) NOT NULL,
  `userId` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `planets`
--

INSERT INTO `planets` (`id`, `name`, `description`, `imgPath`, `userId`) VALUES
(1, 'Coruscant', 'A city-covered planet, Coruscant is the vibrant heart and capital of the galaxy, featuring a diverse mix of citizens and culture. It features towering skyscrapers, streams of speeder-filled air traffic, and inner levels that stretch far below the world’s surface. Coruscant was the seat of government for the Galactic Republic and the Empire that followed, and was the site of numerous historic events during the Clone Wars. It also housed the Jedi Temple and Archives, which hosted Jedi training and learning for over a thousand generations -- traditions that ended when the planet bore witness to Order 66.', 'coruscant.webp', 1),
(2, 'Hoth', 'Hoth is the sixth planet in the remote system of the same name, and was the site of the Rebel Alliance\'s Echo Base. It is a world of snow and ice, surrounded by numerous moons, and home to deadly creatures like the wampa.', 'Hoth.jpeg', 1),
(3, 'Yavin 4', 'One of a number of moons orbiting the gas giant Yavin in the galaxy’s Outer Rim, Yavin 4 is a steamy world covered in jungle and forest. It was the location of the principal rebel base early in the Galactic Civil War, and the site from which the Rebellion launched the attack that destroyed the first Death Star -- a confrontation known thereafter as the Battle of Yavin.', 'yavin4.jpeg', 1),
(10, 'Yavin 4', 'One of a number of moons orbiting the gas giant Yavin in the galaxy’s Outer Rim, Yavin 4 is a steamy world covered in jungle and forest. It was the location of the principal rebel base early in the Galactic Civil War, and the site from which the Rebellion launched the attack that destroyed the first Death Star -- a confrontation known thereafter as the Battle of Yavin.', 'yavin4.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ships`
--

CREATE TABLE `ships` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `imgPath` varchar(200) NOT NULL,
  `userId` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ships`
--

INSERT INTO `ships` (`id`, `name`, `description`, `imgPath`, `userId`) VALUES
(1, 'Super Star Destroyer', 'The Super Star Destroyer is one of the largest, most powerful Imperial vessels ever created. A smooth hull presents an arrowhead shaped profile when viewed from above. Resting in the center of this hull is an \"island\" of habitable volume. Weapons emplacements bristle on the layered city-like surface. The trapezoidal command tower stands near the aft end of this island, capped with two geodesic communication and deflection domes. The underside is a busy network of engineering and superstructure. Thirteen colossal engine thrusters glow blood red as they push the immense craft through space.', 'superstar.webp', 1),
(2, 'Tie Fighter', 'The TIE fighter was the unforgettable symbol of the Imperial fleet. Carried aboard Star Destroyers and battle stations, TIE fighters were single-pilot vehicles designed for fast-paced dogfights with Rebel X-wings and other starfighters. The iconic TIE fighter led to other models in the TIE family including the dagger-shaped TIE Interceptor and the explosive-laden TIE bomber. The terrifying roar of a TIE\'s engines would strike fear into the hearts of all enemies of the Empire.', 'tiefighter.webp', 1),
(3, 'X-wing', 'The X-wing is a versatile Rebel Alliance starfighter that balances speed with firepower. Armed with four laser cannons and two proton torpedo launchers, the X-wing can take on anything the Empire throws at it. Nimble engines give the X-wing an edge during dogfights, and it can make long-range jumps with its hyperdrive and its astromech droid co-pilot. Luke Skywalker is famous for destroying the Death Star behind the controls of an X-wing.', 'xwing.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `theforce`
--

CREATE TABLE `theforce` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `imgPath` varchar(200) NOT NULL,
  `userId` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theforce`
--

INSERT INTO `theforce` (`id`, `name`, `description`, `imgPath`, `userId`) VALUES
(1, 'Sith', 'An ancient order of Force-wielders devoted to the dark side, the Sith practice hate, deception, and greed. Notable for their red-bladed lightsabers, black dress, and use of their aggressive feelings, the Sith look to amass power at all costs. The evil Darth Sidious, along with his apprentice Darth Vader, achieved the Sith goal of galactic conquest after a millennia of plotting.', 'sith.jpeg', 1),
(2, 'Jedi Order', 'A noble order of protectors unified by their ability to tap into the power of the Force, the Jedi Order were the guardians of peace and justice in the Galactic Republic. The age of the Jedi would end, however, due to a nefarious plot by the Sith Lord Darth Sidious.', 'jedi.jpeg', 1),
(3, 'The Force', 'The Force is a mysterious energy field created by life that binds the galaxy together. Harnessing the power of the Force gives the Jedi, the Sith, and others sensitive to this spiritual energy extraordinary abilities, such as levitating objects, tricking minds, and seeing things before they happen. While the Force can grant users powerful abilities, it also directs their actions. And it has a will of its own, which both scholars and mystics have spent millennia seeking to understand.', 'force.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userforums`
--

CREATE TABLE `userforums` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `userId` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userforums`
--

INSERT INTO `userforums` (`id`, `email`, `message`, `userId`) VALUES
(1, 'email@example.com', 'Star Wars holds a very special place in my heart, it has become my favorite film series of all time and it will forever be that way. But out of all of the Star Wars movies I hold this movie the closest to my heart, because return of the Jedi is not only my favorite Star wars movie of all time, but it’s also my favorite film ever made. This movie knocks it out of the park in every category. Music, characters, sets, special affects, acting, and story, and I’ll talk about why all of these things work so SPOILERS if you haven’t seen this movie. ', 1),
(2, 'email@example.com', 'Star Wars holds a very special place in my heart, it has become my favorite film series of all time and it will forever be that way. But out of all of the Star Wars movies I hold this movie the closest to my heart, because return of the Jedi is not only my favorite Star wars movie of all time, but it’s also my favorite film ever made. This movie knocks it out of the park in every category. Music, characters, sets, special affects, acting, and story, and I’ll talk about why all of these things work so SPOILERS if you haven’t seen this movie. ', 1),
(3, 'email@example.com', 'Star Wars holds a very special place in my heart, it has become my favorite film series of all time and it will forever be that way. But out of all of the Star Wars movies I hold this movie the closest to my heart, because return of the Jedi is not only my favorite Star wars movie of all time, but it’s also my favorite film ever made. This movie knocks it out of the park in every category. Music, characters, sets, special affects, acting, and story, and I’ll talk about why all of these things work so SPOILERS if you haven’t seen this movie. ', 1),
(23, 'email@example.com', 'Star Wars holds a very special place in my heart, it has become my favorite film series of all time and it will forever be that way. But out of all of the Star Wars movies I hold this movie the closest to my heart, because return of the Jedi is not only my favorite Star wars movie of all time, but it’s also my favorite film ever made. This movie knocks it out of the park in every category. Music, characters, sets, special affects, acting, and story, and I’ll talk about why all of these things work so SPOILERS if you haven’t seen this movie. ', 1),
(24, 'email@example.com', 'Star Wars holds a very special place in my heart, it has become my favorite film series of all time and it will forever be that way. But out of all of the Star Wars movies I hold this movie the closest to my heart, because return of the Jedi is not only my favorite Star wars movie of all time, but it’s also my favorite film ever made. This movie knocks it out of the park in every category. Music, characters, sets, special affects, acting, and story, and I’ll talk about why all of these things work so SPOILERS if you haven’t seen this movie. ', 1),
(25, 'email@example.com', 'Star Wars holds a very special place in my heart, it has become my favorite film series of all time and it will forever be that way. But out of all of the Star Wars movies I hold this movie the closest to my heart, because return of the Jedi is not only my favorite Star wars movie of all time, but it’s also my favorite film ever made. This movie knocks it out of the park in every category. Music, characters, sets, special affects, acting, and story, and I’ll talk about why all of these things work so SPOILERS if you haven’t seen this movie. ', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alienraces`
--
ALTER TABLE `alienraces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planets`
--
ALTER TABLE `planets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ships`
--
ALTER TABLE `ships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theforce`
--
ALTER TABLE `theforce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userforums`
--
ALTER TABLE `userforums`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alienraces`
--
ALTER TABLE `alienraces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `planets`
--
ALTER TABLE `planets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ships`
--
ALTER TABLE `ships`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `theforce`
--
ALTER TABLE `theforce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userforums`
--
ALTER TABLE `userforums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
