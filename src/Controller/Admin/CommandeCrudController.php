<?php

namespace App\Controller\Admin;

use App\Entity\Commande;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use phpDocumentor\Reflection\Type;

class CommandeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Commande::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            DateTimeField::new('date_commande', 'Date de Commande'),
            DateTimeField::new('date_livraison', 'Date de Livraison'),
            TimeField::new('heure_livraison', 'Heure de Livraison'),
            TextField::new('adresse', 'Adresse de Livraison'),
            MoneyField::new('prix_total', 'Prix Total')->setCurrency('EUR'),
            TextField::new('statut', 'Statut')
        ];
    }
}
