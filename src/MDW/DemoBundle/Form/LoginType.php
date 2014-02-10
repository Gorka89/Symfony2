<?php
namespace MDW\DemoBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class LoginType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('login')
                ->add('password','password');

    }
    public function getName()
    {
        return 'login_form';
    }
}