<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* suspension.html.twig */
class __TwigTemplate_af529e197ec509f108514172ebfe6679a868834365d1ccb662a8347d11afeae3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "suspension.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        // line 5
        echo "    
   \t<div class=\"row\">
 
\t    <div class=\"col-sm-12\">

\t\t  <h3>";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo " </h3>

\t\t   <h5><i class=\"far fa-calendar-alt\"></i> ";
        // line 12
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "F d, Y");
        echo "</h5>

\t\t   <p>  ";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo " </p>

        </div>
      
    </div>

";
    }

    public function getTemplateName()
    {
        return "suspension.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  54 => 12,  49 => 10,  42 => 5,  39 => 4,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}


{% block content %}
    
   \t<div class=\"row\">
 
\t    <div class=\"col-sm-12\">

\t\t  <h3>{{page.title}} </h3>

\t\t   <h5><i class=\"far fa-calendar-alt\"></i> {{page.date|date('F d, Y')}}</h5>

\t\t   <p>  {{page.content}} </p>

        </div>
      
    </div>

{% endblock %}", "suspension.html.twig", "C:\\Program Files\\Ampps\\www\\appeals\\user\\themes\\theme-bootstrap\\templates\\suspension.html.twig");
    }
}
