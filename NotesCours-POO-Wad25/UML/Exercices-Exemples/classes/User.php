<?php

class User {
    private string $nom;
    private string $email;
    private array $posts = [];

    public function __construct(string $nom, string $email) {
        $this->nom = $nom;
        $this->email = $email;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function addPost(Post $post): void {
        if (!in_array($post, $this->posts, true)) {
            $this->posts[] = $post;
            $post->setAuteur($this);
        }
    }

    public function getPosts(): array {
        return $this->posts;
    }

    public function removePost(Post $post): bool {
        $key = array_search($post, $this->posts, true);
        if ($key !== false) {
            unset($this->posts[$key]);
            $this->posts = array_values($this->posts); // Re-index array
            return true;
        }
        return false;
    }

    public function __toString(): string {
        return "User: {$this->nom} ({$this->email})";
    }
}