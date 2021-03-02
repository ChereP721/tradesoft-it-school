<?php

namespace MyProject\Models\Articles;

use MyProject\Models\ActiveRecordEntity;
use MyProject\Models\Users\User;

//use MyProject\Models\Users\User;
//use MyProject\Services\Db;

class Article extends ActiveRecordEntity
{
    /** @var int */
    protected $id;

    /** @var string */
    protected $name;

    /** @var string */
    protected $text;

    /** @var string */
    protected $authorId;

    /** @var string */
    protected $createdAt;

    /**
     * @return string
     */

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
        public function getText(): string
        {
            return $this->text;
        }

        protected static function getTableName(): string
        {
            return 'articles';
        }
    /**
     * @return int
     */
    public function getAuthor(): User
    {
        return User::getById($this->authorId);
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @param User $author
     */

    public function setAuthor(User $author): void
    {
        $this->authorId = $author->getId();
    }

}

?>