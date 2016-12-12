<?php

/* admin/blog/show.html.twig */
class __TwigTemplate_ef15a0960eaee132de3f277263e8b3734282fe428890a3aab36322572167b90f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/show.html.twig", 1);
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
        echo "admin_post_show";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th scope=\"row\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.summary"), "html", null, true);
        echo "</th>
                <td>";
        // line 12
        echo $this->env->getExtension('AppBundle\Twig\AppExtension')->markdownToHtml($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "summary", array()));
        echo "</td>
            </tr>
            <tr>
                <th scope=\"row\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.content"), "html", null, true);
        echo "</th>
                <td>";
        // line 16
        echo $this->env->getExtension('AppBundle\Twig\AppExtension')->markdownToHtml($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content", array()));
        echo "</td>
            </tr>
            <tr>
                <th scope=\"row\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.author"), "html", null, true);
        echo "</th>
                <td><p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "authorEmail", array()), "html", null, true);
        echo "</p></td>
            </tr>
            <tr>
                <th scope=\"row\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.published_at"), "html", null, true);
        echo "</th>
                ";
        // line 27
        echo "                <td><p>";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "publishedAt", array()), "long", "medium", null, "UTC"), "html", null, true);
        echo "</p></td>
            </tr>
        </tbody>
    </table>
";
    }

    // line 33
    public function block_sidebar($context, array $blocks = array())
    {
        // line 34
        echo "    <div class=\"section\">
        <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_edit", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.edit_contents"), "html", null, true);
        echo "
        </a>
    </div>

    <div class=\"section\">
        ";
        // line 41
        echo twig_include($this->env, $context, "admin/blog/_form.html.twig", array("form" =>         // line 42
(isset($context["delete_form"]) ? $context["delete_form"] : null), "button_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.delete_post"), "button_css" => "btn btn-lg btn-block btn-danger", "show_confirmation" => true), false);
        // line 46
        echo "
    </div>

    
";
    }

    public function getTemplateName()
    {
        return "admin/blog/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 46,  111 => 42,  110 => 41,  102 => 36,  98 => 35,  95 => 34,  92 => 33,  82 => 27,  78 => 23,  72 => 20,  68 => 19,  62 => 16,  58 => 15,  52 => 12,  48 => 11,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/blog/show.html.twig", "C:\\xampp\\htdocs\\symfony_demo\\app\\Resources\\views\\admin\\blog\\show.html.twig");
    }
}
