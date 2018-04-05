<?php

/* blog/index.html.twig */
class __TwigTemplate_fb752098cf2db75db6fbe31dffddf95ff77450b98bdd60db1ec678b6a9210021 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container body-content\">
        <div class=\"row\">
            ";
        // line 7
        echo "                ";
        // line 8
        echo "                    ";
        // line 9
        echo "                        ";
        // line 10
        echo "                            ";
        // line 11
        echo "                        ";
        // line 12
        echo "
                        ";
        // line 14
        echo "                            ";
        // line 15
        echo "                        ";
        // line 16
        echo "
                        ";
        // line 18
        echo "                            ";
        // line 19
        echo "                        ";
        // line 20
        echo "
                        ";
        // line 22
        echo "                            ";
        // line 23
        echo "                                ";
        // line 24
        echo "                                   ";
        // line 25
        echo "                            ";
        // line 26
        echo "                        ";
        // line 27
        echo "                    ";
        // line 28
        echo "                ";
        // line 29
        echo "            ";
        // line 30
        echo "        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 30,  94 => 29,  92 => 28,  90 => 27,  88 => 26,  86 => 25,  84 => 24,  82 => 23,  80 => 22,  77 => 20,  75 => 19,  73 => 18,  70 => 16,  68 => 15,  66 => 14,  63 => 12,  61 => 11,  59 => 10,  57 => 9,  55 => 8,  53 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block main %}
    <div class=\"container body-content\">
        <div class=\"row\">
            {#{% for article in articles %}#}
                {#<div class=\"col-md-6\">#}
                    {#<article>#}
                        {#<header>#}
                            {#<h2>{{ article.title }}</h2>#}
                        {#</header>#}

                        {#<p>#}
                            {#{{ article.summary }}#}
                        {#</p>#}

                        {#<small class=\"author\">#}
                            {#{{ article.author }}#}
                        {#</small>#}

                        {#<footer>#}
                            {#<div class=\"pull-right\">#}
                                {#<a class=\"btn btn-default btn-xs\"#}
                                   {#href=\"{{ path('article_view',{'id':article.id}) }}\">Read more &raquo;</a>#}
                            {#</div>#}
                        {#</footer>#}
                    {#</article>#}
                {#</div>#}
            {#{% endfor %}#}
        </div>
    </div>

{% endblock %}
", "blog/index.html.twig", "C:\\Users\\Val Tod\\Desktop\\PHP-Blog-Basic\\app\\Resources\\views\\blog\\index.html.twig");
    }
}
