-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2024 at 05:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(2000) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'FI1.png', 'This is one of the most wholesome and somewhat bittersweet memories I have with my high school friends. It was wholesome because we got to spend our first official overnight stay at a hotel far away from our homes. It was also very special because we were celebrating the 18th birthday of the youngest member of our circle of friends. We even got to visit Sampaloc Lake using our friend’s parents\' car, which she drove herself! It was truly a special night for all of us.\r\nHowever, it feels a little bittersweet knowing that after that day, we would be going our separate ways, each pursuing different paths in college. Despite that, we had an amazing time that day, and we were lucky to enjoy the beautiful scenery in the morning as we walked along Sampaloc Lake.\r\nBut I’m proud to say that these people are still in my life and that they are still the realest ones that I know I can turn to when things are hard. ', NULL),
(2, 1, 'FI2.png', 'My 20th birthday might have been the most fun I’ve had this year. It was an unusual celebration for me because I spent the day with my college friends. I was just very glad that they were there to celebrate such a special day with me. To my surprise, a lot of things happened that I’m very grateful for.\r\nFirst of all, the whole circle was complete that day, which made the celebration even more eventful and joyous. What truly touched my heart was their surprise. It was the first time I had ever been surprised for my birthday, which is why I was in tears. Beyond that, I had an amazing time singing and dancing, as we celebrated my birthday at a karaoke place. I felt like those two hours lasted longer than they actually did.\r\nEveryone’s presence was truly a gift that day, and I’m so grateful to have such amazing people around me.\r\n', NULL),
(3, 1, 'FI3.png', 'This was the first overnight vacation with the whole college circle of friends. This trip was especially memorable because we spent it at an exclusive resort in Talisay, overlooking the breathtaking view of Taal Volcano. We had an amazing time that day, exploring the resort, swimming together, and playing games in the room. It felt like we were kids again, carefree and full of joy, playing as if there was no tomorrow.\r\nWe cherished each other’s company so much that we stayed up until 4 a.m., playing games and having heartfelt conversations while sitting in a circle on the bed. It still feels surreal to have had that moment with everyone, reminiscing about the experiences we’ve shared that brought us to that day.\r\nWe also took plenty of photos, which I’ll treasure and hold dear for a long time. This trip will always hold a special place in my heart as a beautiful reminder of the bond we share and the memories we’ve created together.\r\n', NULL),
(4, 2, 'LI1.png', 'The first core memory is from the finals season of the second semester during my second year as a BSIT student. These particular finals season was incredibly challenging because my team had to develop two games for our final project. What made it even more demanding was the requirement to create these games using two different programming languages, with the deadlines for both projects being uncomfortably close together.\r\nDespite these obstacles, I was able to lead my groupmates confidently and without hesitation. This was possible because we fully trusted one another, and they had complete faith in me as their leader. Their trust and teamwork were a source of strength, inspiring me to stay focused and guide us through the pressure. Having such supportive and dedicated groupmates boosted my confidence and reassured me that I could lead them effectively, no matter how daunting the task. This experience not only tested my leadership skills but also reinforced the value of mutual trust and collaboration in achieving success. With everyone’s effort we are able to successfully present our projects and was able to pass our finals with flying colors.', NULL),
(5, 2, 'LI2.png', 'The second core memory takes place during the Freshmen Orientation of the Computer Society. This event marked the first major activity of the Computer Society for Academic Year 2425 and also served as the first formal opportunity to meet and welcome all the first-year students of BSIT. From the meticulous preparations to the seamless execution, I, alongside the dedicated officers and committee heads, worked tirelessly to ensure the success of this event. Together, we were able to create a memorable and warm celebration to welcome the freshmen into the BSIT community.\r\nThis experience not only highlighted the value of teamwork and collaboration but also strengthened the bond among the officers and committees as we worked toward a shared goal. It was a moment of pride and joy to see the smiles on the faces of the freshmen as they felt genuinely welcomed and supported. This memory stands as a testament to the collective effort, enthusiasm, and commitment of everyone involved in making the event a success.\r\nThis experience was very meaningful to me because we are able to get to know our officers more and have this experience to perform our responsibilities as well as our commitment to providing members of the computer society of more meaningful events.', NULL),
(6, 2, 'LI3.png', 'The third core memory is the most memorable for me. I was in my first year back then when I participated as a volunteer for the General Assembly of the Computer Society. Being part of organizing such a large-scale event was entirely new to me, and it felt both exciting and overwhelming. Fortunately, I met a lot of incredibly helpful seniors who guided me every step of the way in overseeing the event. Their mentorship not only eased my nerves but also inspired me to step out of my comfort zone and embrace the responsibilities entrusted to me.\r\nI was part of the registration committee, where our primary role was to handle in-person registrations during the event. In addition to this, we also served as marshals, ensuring that everything ran smoothly. However, the most meaningful and unforgettable part of my participation in the Computer Society’s General Assembly was being asked to facilitate a hidden game during the Amazing Race, which was the team-building activity of the event.\r\nFor this, we organized a mafia game, and I took on the responsibility of curating the secret missions, creating the clues, and orienting the players who were designated as mafias. I remember feeling incredibly nervous about how the game would unfold, worried that any misstep could derail the activity. Despite my apprehensions, the event turned out to be a huge success, thanks to the support and cooperation of the team members. Watching everyone engage with the game, laugh, and have a genuinely great time was the most rewarding part of the experience.\r\nThis memory remains close to my heart because it marked one of the first times I truly felt like a contributing part of a larger community. And this experience also sparked my passion to continue being a student leader.', NULL),
(7, 3, 'MI1.png', 'As a big fan of the Hunger Games franchise, it has always been a dream of mine to watch a movie in the cinema. Just last year, with the release of The Ballad of Songbirds and Snakes, I courageously went to the cinema alone and watched the movie. As much as I wanted to share that moment with someone, I think going alone that day actually helped with my mental health at the time. Having that moment alone in the cinema after the movie finished brought a different kind of joy. ', NULL),
(8, 3, 'MI2.png', 'I’m really a big fantasy fan, which is why when Avatar: The Way of Water was released, I really thought hard about whether I should go and watch it. I originally planned to watch it with someone, but then I figured I could challenge myself to watch it alone. And so I did, and that was the first time I watched a movie alone in the cinema. It was a nerve-wracking experience, given that it was still early post-COVID, so there were health concerns, and during that time, my social anxiety was at its peak. I was scared to go outside. But with this opportunity, I was able to have a great time, and I really enjoyed the movie, even though it ran for almost 3 hours! Which still felt short— that\'s why I\'m looking forward to the next movie.', NULL),
(9, 3, 'MI3.png', 'The most recent core memory was during our Director’s Club experience watching Inside Out 2. I wouldn’t say it was a perfect day because it wasn’t, but what made it memorable were the people I was with. It was also the first time all of us gathered in a cinema, making it a whole new experience. To top it off, we went to MOA to watch the movie.\r\nWhen I say the day wasn’t perfect, what I mean is that we faced some delays in our plans. Despite that, we celebrated the day happily and were able to create an experience of a lifetime.\r\n', NULL),
(10, 4, 'KI1.png', 'The first K-Pop group I really got into was BLACKPINK. I watched their content during their debut era and was amazed by their dance practices. Back then, I didn’t have access to the internet, so my knowledge of them was very limited. However, in 2017, I met friends who were also fans of BLACKPINK. We would gather at their house and watch BLACKPINK videos nonstop. We made it our mission to turn all of our friends into BLINKs before their comeback. Since then, BLACKPINK has cemented their position as the number one girl group in the world. Watching them grow, and growing with them and their music, has been such an important part of my teenage years.', 'FF00FF'),
(11, 4, 'KI2.png', 'iKON, or should I say, my ultimate K-Pop group that I stan. I discovered them during one of the darkest times in my recent years. Through their music and content, I was able to get through life and find the motivation to keep going. iKON is a group that has experienced tons of mistreatment throughout their career, but despite that, they still thrive in their craft. I will always be proud of how they produce their own music. Their creativity and sincerity have touched lives through their songs. I can proudly say that they are my youth, and their music has not only brought me happiness but also hope and a driving force in my life.', ''),
(12, 4, 'KI3.png', 'The Rose is a Korean indie-rock band that I discovered just a few years ago. Unlike other groups, The Rose is a band I personally connect with because of their music. They have a wide range of songs that resonate deeply with me, and their melodies have often saved me during sleepless nights. Their lyrics have spoken on my behalf, expressing emotions I couldn’t put into words. Although they are not technically a K-Pop group, I still stan them and hold them closely to my heart. The sincerity and rawness of their music make them stand out, and I continue to admire them for their unique sound and emotional depth.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Frienship Island', 'Friendship is one of the key concepts in relationships that a person can experience. Through friendship, a person can learn about others—their lives, goals, stories, and purposes—and, in turn, gain insights into themselves. This is the power that friendship holds.', 'Friendship is a vital aspect of human relationships, built on trust, understanding, and mutual respect. It allows individuals to connect deeply, gain insights into others\' lives, and reflect on their own values and purpose. True friends offer unwavering support during challenges and amplify joy in celebrations, helping one another grow. Friendship fosters emotional resilience, teaching compromise, patience, and forgiveness. It creates a network of shared experiences that empower individuals to chase dreams, overcome fears, and grow into the best version of themselves. The essence of Friendship Island highlights how these connections shape our identity and life’s journey.', 'FFB6C1', 'FI.JPG', NULL),
(2, 'Leadership Island', 'Meet Jermaine’s Leadership Island, this island composes significant moments on her life as a student leader. Through this island Jermaine was able to meet incredible people, learn from them, and influence others. ', 'Meet Jermaine’s Leadership Island, a cornerstone of her personality built upon the defining moments of her journey as a student leader. This vibrant and dynamic island reflects the values and lessons she has gained through countless experiences in guiding and inspiring others. Leadership Island celebrates her ability to take charge, foster teamwork, and build trust among her community.\r\nThis island is a testament to her growth, showcasing her passion for uplifting others and her dedication to creating positive change. It embodies her resilience in overcoming challenges, her creativity in solving problems, and her vision for making her school and community a better place. Leadership Island stands as a shining beacon of her influence, reminding her of the impact she has made and will continue to make as a leader.\r\n', '4169E1', 'LI.JPG', NULL),
(3, 'Movie Island', 'Movie Island is a deeply personal space, a collection of outlets where you find comfort, joy, and pure entertainment through watching movies. From thrilling adventures to heartfelt dramas, this island is a sanctuary where storytelling comes alive, providing an escape into worlds that inspire.', 'Movie Island reflects your love for cinema—a personal haven where storytelling becomes a source of comfort, joy, and endless entertainment. This island isn’t just about watching movies; it’s about immersing in the emotions, lessons, and inspiration they offer. The cinematic black backdrop symbolizes the depth of these stories, while the golden amber glow and ruby red accents highlight the excitement and passion you feel for each scene. On Movie Island, every film serves as an outlet—a gateway to adventure, a way to process emotions, or simply unwind. It’s where you laugh, cry, and cheer alongside characters who feel like old friends. It’s a celebration of how movies shape your perspective, bring joy on tough days, and offer an escape into worlds both familiar and fantastical. Every story reminds you of the beauty and power of film in your life.', 'FFBF00', 'MI.JPG', NULL),
(4, 'K-Pop Island', 'K-Pop Island celebrates the joy and comfort fans find in K-pop. It’s a space where music inspires hope, builds connections, and uplifts listeners during life’s highs and lows. This island captures the power of music to unite and heal.', 'K-Pop Island is a vibrant realm that embodies the joy and inspiration fans experience in the world of K-pop. This island echoes melodies of hope and empowerment, reminding fans of the beauty of connection through music. From the thrill of live performances to the comfort of heartfelt lyrics, K-Pop Island captures the essence of being a devoted fan. It’s a sanctuary of support and positivity, where every beat and choreography tells a story of perseverance and dreams. The island brings people together, fostering a sense of belonging and community. K-pop’s impact goes beyond entertainment, uplifting fans through tough times and motivating them to chase their goals. It’s a space filled with lightsticks, fan chants, and the unspoken bond that connects fans to the music and each other, reminding them they are never alone.', 'FF00FF', 'KI.png', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
