<?php

/* admin/blog/edit.html.twig */
class __TwigTemplate_745bd7c32188af272201447f91ff6f05f485c807608003f39bd90a5c09b67981 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/edit.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        echo "admin_post_edit";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.edit_post", array("%id%" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()))), "html", null, true);
        echo "</h1>

    ";
        // line 8
        echo twig_include($this->env, $context, "admin/blog/_form.html.twig", array("form" =>         // line 9
(isset($context["edit_form"]) ? $context["edit_form"] : null), "button_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.save"), "include_back_to_home_link" => true), false);
        // line 12
        echo "
";
    }

    // line 15
    public function block_sidebar($context, array $blocks = array())
    {
        // line 16
        echo "    <div class=\"section actions\">
        ";
        // line 17
        echo twig_include($this->env, $context, "admin/blog/_form.html.twig", array("form" =>         // line 18
(isset($context["delete_form"]) ? $context["delete_form"] : null), "button_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.delete_post"), "button_css" => "btn btn-lg btn-block btn-danger", "show_confirmation" => true), false);
        // line 22
        echo "
    </div>

    
";
    }

    public function getTemplateName()
    {
        return "admin/blog/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 22,  60 => 18,  59 => 17,  56 => 16,  53 => 15,  48 => 12,  46 => 9,  45 => 8,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/blog/edit.html.twig", "C:\\xampp\\htdocs\\symfony_demo\\app\\Resources\\views\\admin\\blog\\edit.html.twig");
    }
}
