<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Comment;
use AppBundle\Entity\Post;
use AppBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Defines the sample data to load in the database when running the unit and
 * functional tests.
 *
 * Execute this command to load the data:
 *
 *   $ php bin/console doctrine:fixtures:load
 *
 * See http://symfony.com/doc/current/bundles/DoctrineFixturesBundle/index.html
 *
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class LoadFixtures implements FixtureInterface, ContainerAwareInterface
{
    /** @var ContainerInterface */
    private $container;

    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $this->loadUsers($manager);
        $this->loadPosts($manager);
    }

    private function loadUsers(ObjectManager $manager)
    {
        $passwordEncoder = $this->container->get('security.password_encoder');

        $johnUser = new User();
        $johnUser->setUsername('john_user');
        $johnUser->setEmail('john_user@symfony.com');
        $encodedPassword = $passwordEncoder->encodePassword($johnUser, 'kitten');
        $johnUser->setPassword($encodedPassword);
        $manager->persist($johnUser);

        $annaAdmin = new User();
        $annaAdmin->setUsername('anna_admin');
        $annaAdmin->setEmail('anna_admin@symfony.com');
        $annaAdmin->setRoles(['ROLE_ADMIN']);
        $encodedPassword = $passwordEncoder->encodePassword($annaAdmin, 'kitten');
        $annaAdmin->setPassword($encodedPassword);
        $manager->persist($annaAdmin);

        $manager->flush();
    }

    private function loadPosts(ObjectManager $manager)
    {
        foreach (range(1, 30) as $i) {
            $post = new Post();

            $post->setTitle($this->getRandomPostTitle());
            $post->setSummary($this->getRandomPostSummary());
            $post->setSlug($this->container->get('slugger')->slugify($post->getTitle()));
            $post->setContent($this->getPostContent());
            $post->setAuthorEmail('anna_admin@symfony.com');
            $post->setPublishedAt(new \DateTime('now - '.$i.'days'));

            foreach (range(1, 5) as $j) {
                $comment = new Comment();

                $comment->setAuthorEmail('john_user@symfony.com');
                $comment->setPublishedAt(new \DateTime('now + '.($i + $j).'seconds'));
                $comment->setContent($this->getRandomCommentContent());
                $comment->setPost($post);

                $manager->persist($comment);
                $post->addComment($comment);
            }

            $manager->persist($post);
        }

        $manager->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    private function getPostContent()
    {
        return <<<'MARKDOWN'
Федеральная антимонопольная служба (ФАС) России во второй раз возбудила дело против американской Google
за неисполнение предписания службы, приступит к его рассмотрению после составления протокола 28 декабря, 
заявил замглавы ФАС Сергей Пузыревский.

"Тридцатого ноября 2016 года во второй раз ФАС России возбудила административные дела в отношении компаний Google Inc. 
и Google Ireland Limited за неисполнение предписания антимонопольного ведомства", - сказал он, добавив, что составление 
протокола назначено на 28 декабря.

Первое искусственное тело на околоземной орбите появилось 4 октября 1957 года: СССР тогда запустил свой знаменитый Спутник. 
Он, конечно, давно сгорел в плотных слоях атмосферы. Но многочисленные аппараты, которые последовали и продолжают следовать 
за первенцем, накапливаются. Это - крупные объекты: спутники, отработанные ступени ракет, топливные баки. И мелкие: болты, 
гайки, части солнечных батарей, кронштейны, инструменты, потерянные космонавтами и астронавтами, работавшими вне своих кораблей.

Пополняют рукотворный слой, висящий над нашей планетой, обломки спутников, уничтоженных намеренно во время 
испытаний «космического оружия». С 1968 по 1986 год США и СССР расстреляли на орбите не менее 20 аппаратов. 
И больше, правда, таких экспериментов не проводили. А вот китайцы сподобились: 11 января 2007 года, выпустив ракету, 
они разнесли на кусочки собственный же метеоспутник. Чем отвратительно намусорили.

В Стамбуле недалеко от стадиона Vodafone Arena взорвался заминированный автомобиль. Ранено 20 человек, сообщает Reuters 
со ссылкой на министра внутренних дел Турции Сулеймана Сойлу. Взрыв произошел через два часа после окончания футбольного 
матча между командами Бешикташ и Бурсаспор.СМИ: около здания аэропорта Стамбула произошла стрельбаГосдеп попросил семьи 
американских дипломатов покинуть Стамбул.

Почти каждый второй россиянин считает политиком года президента Владимира Путина. Такой вывод следует из социологического опроса, 
проведенного фондом «Общественное мнение» (ФОМ). Отвечая на вопрос, кому из российских политиков и общественных деятелей можно 
присвоить звание «человека года», 43 процента граждан назвали Путина. Кроме того, респонденты отметили главу МИД Сергея Лаврова 
(9 процентов), лидера ЛДПР Владимира Жириновского (7 процентов) и главу Минобороны Сергея Шойгу (5 процентов). При этом более 
четверти — 27 процентов — затруднились с ответом.
MARKDOWN;
    }

    private function getPhrases()
    {
        return [
            'ФАС снова возбудила дело против Google',
            'Японцы отправились в космос убирать мусор',
            'Взрыв в центре Стамбула',
            'Россияне признали Путина политиком года',
            'Россия и ИГ пугают НАТО',
            'Скелеты в шкафу',
            'В Госдуме предложили ограничить размер премий для глав госкомпаний',
            'Музыкальная комедия La la Land получила премию Critics Choice',
            'Названы самые популярные машины с автоматом',
            'Учеба в вузе стала причиной избыточного веса',
            'Алексею Навальному повторили обвинение',
            'Сокращая площадки, СКА строит НХЛ в вакууме. 10 выводов недели',
            'ФАС возбудила новое дело против Apple',
            'Лавров заявил о скоординированности атаки на Пальмиру с боями в Алеппо',
            'Кинокритики наградили Алека Болдуина за пародию на Трампа',
        ];
    }

    private function getRandomPostTitle()
    {
        $titles = $this->getPhrases();

        return $titles[array_rand($titles)];
    }

    private function getRandomPostSummary($maxLength = 255)
    {
        $phrases = $this->getPhrases();

        $numPhrases = mt_rand(6, 12);
        shuffle($phrases);

        return substr(implode(' ', array_slice($phrases, 0, $numPhrases - 1)), 0, $maxLength);
    }

    private function getRandomCommentContent()
    {
        $phrases = $this->getPhrases();

        $numPhrases = mt_rand(2, 15);
        shuffle($phrases);

        return implode(' ', array_slice($phrases, 0, $numPhrases - 1));
    }
}
