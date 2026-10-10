<?php

namespace App\MessageHandler;

use App\Message\NouveauCommentaire;
use App\Repository\CommentaireRepository;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
final class NouveauCommentaireHandler
{
    public function __construct(
        private CommentaireRepository $commentaireRepository,
        private LoggerInterface $logger,
    ) {
    }

    public function __invoke(NouveauCommentaire $message): void
    {
        $commentaire = $this->commentaireRepository->find($message->getCommentaireId());

        if ($commentaire === null) {
            return;
        }

        sleep(5);

        $this->logger->info('Notification envoyée au propriétaire du restaurant.', [
            'commentaire_id' => $commentaire->getId(),
            'email_proprietaire' => $commentaire->getRestaurant()?->getProprietaire()?->getEmail(),
        ]);
    }
}