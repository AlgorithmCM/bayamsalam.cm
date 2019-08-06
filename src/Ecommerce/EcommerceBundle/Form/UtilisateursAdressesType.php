<?php

namespace Ecommerce\EcommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UtilisateursAdressesType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nom', null, array('label' => 'Nom(s) *'))
                ->add('prenom', null, array('label' => 'Prénom(s) *'))
                ->add('telephone', null, array('label' => 'Téléphone *'))
                ->add('adresse', null, array('label' => 'Adresse * (Ex.: Akwa, Bonanjo, Yassa)'))
                ->add('cp', null, array('required' => false, 'label' => 'Code postal'))
                ->add('ville', null, array('label' => 'Ville * (Ex.: Douala)'))
                ->add('pays', null, array('label' => 'Pays * (Ex.: Cameroun)'))
                ->add('complement', null, array('required' => false, 'label' => 'Autres précisions (Ex.: En face de la station)'))
        //->add('utilisateur')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'ecommerce_ecommercebundle_utilisateursadresses';
    }

}
