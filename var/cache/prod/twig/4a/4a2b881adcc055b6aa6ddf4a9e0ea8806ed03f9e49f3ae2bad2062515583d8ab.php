<?php

/* admin/blog/_form.html.twig */
class __TwigTemplate_a3d74d6bf3a3491748a75956832bb4a6418488b04928e5292eacd29d955e0c60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        if (((array_key_exists("show_confirmation", $context)) ? (_twig_default_filter((isset($context["show_confirmation"]) ? $context["show_confirmation"] : null), false)) : (false))) {
            // line 10
            echo "    ";
            $context["attr"] = array("data-confirmation" => "true");
            // line 11
            echo "    ";
            echo twig_include($this->env, $context, "blog/_delete_post_confirmation.html.twig");
            echo "
";
        }
        // line 13
        echo "
";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => ((array_key_exists("attr", $context)) ? (_twig_default_filter((isset($context["attr"]) ? $context["attr"] : null), array())) : (array()))));
        echo "
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "

    <input type=\"submit\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) ? $context["button_label"] : null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.create_post"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.create_post"))), "html", null, true);
        echo "\"
           class=\"";
        // line 18
        echo twig_escape_filter($this->env, ((array_key_exists("button_css", $context)) ? (_twig_default_filter((isset($context["button_css"]) ? $context["button_css"] : null), "btn btn-primary")) : ("btn btn-primary")), "html", null, true);
        echo "\" />

    ";
        // line 20
        if (((array_key_exists("include_back_to_home_link", $context)) ? (_twig_default_filter((isset($context["include_back_to_home_link"]) ? $context["include_back_to_home_link"] : null), false)) : (false))) {
            // line 21
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_index");
            echo "\" class=\"btn btn-link\">
            ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.back_to_list"), "html", null, true);
            echo "
        </a>
    ";
        }
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/blog/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 25,  61 => 22,  56 => 21,  54 => 20,  49 => 18,  45 => 17,  40 => 15,  36 => 14,  33 => 13,  27 => 11,  24 => 10,  22 => 9,  19 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/blog/_form.html.twig", "C:\\xampp\\htdocs\\symfony_demo\\app\\Resources\\views\\admin\\blog\\_form.html.twig");
    }
}
