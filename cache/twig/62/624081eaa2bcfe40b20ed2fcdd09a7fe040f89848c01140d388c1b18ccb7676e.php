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

/* blog.html.twig */
class __TwigTemplate_89ed0facc2c1af0aaad55507e895f69927de0880ab367f54b7936825c5093a16 extends \Twig\Template
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
        // line 2
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 4
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 2
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        // line 7
        echo "
\t   ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 9
            echo "
\t      <h4>ΓΑΚ ";
            // line 10
            echo $this->getAttribute($context["page"], "title", []);
            echo "</h4>

\t      <div class=\"row\">

\t\t      <div class=\"col-sm-12\">

\t\t        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["page"], "children", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 17
                echo "
\t\t      \t  ";
                // line 18
                if (twig_length_filter($this->env, $this->getAttribute($context["p"], "title", []))) {
                    // line 19
                    echo "\t\t\t      \t 
\t\t      \t\t";
                    // line 20
                    $context["current_button"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->containsFilter($this->getAttribute($context["p"], "title", []), "Αναστολή")) ? ("btn-danger") : ("btn-primary"));
                    // line 21
                    echo "\t\t      \t\t";
                    $context["icon_button"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->containsFilter($this->getAttribute($context["p"], "title", []), "Αναστολή")) ? ("fa-gavel") : ("fa-balance-scale"));
                    // line 22
                    echo "
\t\t\t      \t<button type=\"button\" class=\"btn ";
                    // line 23
                    echo ($context["current_button"] ?? null);
                    echo "\" data-toggle=\"modal\" data-target=\"#myModal";
                    echo $this->getAttribute($this->getAttribute($context["p"], "parent", []), "title", []);
                    echo $this->getAttribute($context["loop"], "index", []);
                    echo "\">
\t                   <i class=\"fas ";
                    // line 24
                    echo ($context["icon_button"] ?? null);
                    echo "\"></i>  ";
                    echo $this->getAttribute($context["p"], "title", []);
                    echo "
\t                </button>

\t                <div class=\"modal\" id=\"myModal";
                    // line 27
                    echo $this->getAttribute($this->getAttribute($context["p"], "parent", []), "title", []);
                    echo $this->getAttribute($context["loop"], "index", []);
                    echo "\">
\t\t\t\t\t    <div class=\"modal-dialog modal-dialog-scrollable\">
\t\t\t\t\t      <div class=\"modal-content\">
\t\t\t\t\t      
\t\t\t\t\t        
\t\t\t\t\t        <div class=\"modal-header\">
\t\t\t\t\t          <h1 class=\"modal-title\">";
                    // line 33
                    echo $this->getAttribute($context["p"], "title", []);
                    echo "</h1>
\t\t\t\t\t          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
\t\t\t\t\t        </div>
\t\t\t\t\t        
\t\t\t\t\t        
\t\t\t\t\t        <div class=\"modal-body\">
\t\t\t\t\t         <p> ";
                    // line 39
                    echo $this->getAttribute($context["p"], "content", []);
                    echo "</p>
\t\t\t\t\t        </div>
\t\t\t\t\t        
\t\t\t\t\t        
\t\t\t\t\t        <div class=\"modal-footer\">
\t\t\t\t\t          <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t        </div>
\t\t\t\t\t        
\t\t\t\t\t      </div>

\t\t\t            </div>

\t\t\t        </div>

\t\t            ";
                }
                // line 54
                echo "
\t            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "
\t        </div>

        </div>  

\t   ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t

\t\t   ";
        // line 63
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 64
            echo "
\t\t\t   ";
            // line 65
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 65)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 66
            echo "    
\t       ";
        }
        // line 67
        echo " 
  

";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 67,  207 => 66,  205 => 65,  202 => 64,  200 => 63,  196 => 61,  177 => 56,  162 => 54,  144 => 39,  135 => 33,  125 => 27,  117 => 24,  110 => 23,  107 => 22,  104 => 21,  102 => 20,  99 => 19,  97 => 18,  94 => 17,  77 => 16,  68 => 10,  65 => 9,  48 => 8,  45 => 7,  42 => 6,  37 => 2,  35 => 4,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'partials/base.html.twig' %}

{% set collection=page.collection() %}

{% block content %}

\t   {% for page in collection %}

\t      <h4>ΓΑΚ {{page.title}}</h4>

\t      <div class=\"row\">

\t\t      <div class=\"col-sm-12\">

\t\t        {% for p in page.children %}

\t\t      \t  {% if  p.title|length %}
\t\t\t      \t 
\t\t      \t\t{% set current_button = p.title|contains('Αναστολή') ? 'btn-danger' : 'btn-primary' %}
\t\t      \t\t{% set icon_button = p.title|contains('Αναστολή') ? 'fa-gavel' : 'fa-balance-scale' %}

\t\t\t      \t<button type=\"button\" class=\"btn {{ current_button }}\" data-toggle=\"modal\" data-target=\"#myModal{{p.parent.title}}{{loop.index}}\">
\t                   <i class=\"fas {{ icon_button }}\"></i>  {{ p.title }}
\t                </button>

\t                <div class=\"modal\" id=\"myModal{{p.parent.title}}{{loop.index}}\">
\t\t\t\t\t    <div class=\"modal-dialog modal-dialog-scrollable\">
\t\t\t\t\t      <div class=\"modal-content\">
\t\t\t\t\t      
\t\t\t\t\t        
\t\t\t\t\t        <div class=\"modal-header\">
\t\t\t\t\t          <h1 class=\"modal-title\">{{ p.title }}</h1>
\t\t\t\t\t          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
\t\t\t\t\t        </div>
\t\t\t\t\t        
\t\t\t\t\t        
\t\t\t\t\t        <div class=\"modal-body\">
\t\t\t\t\t         <p> {{ p.content }}</p>
\t\t\t\t\t        </div>
\t\t\t\t\t        
\t\t\t\t\t        
\t\t\t\t\t        <div class=\"modal-footer\">
\t\t\t\t\t          <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t        </div>
\t\t\t\t\t        
\t\t\t\t\t      </div>

\t\t\t            </div>

\t\t\t        </div>

\t\t            {% endif %}

\t            {% endfor %}

\t        </div>

        </div>  

\t   {% endfor %}\t

\t\t   {% if config.plugins.pagination.enabled and collection.params.pagination %}

\t\t\t   {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
    
\t       {% endif %} 
  

{% endblock %}", "blog.html.twig", "C:\\Program Files\\Ampps\\www\\appeals\\user\\themes\\theme-bootstrap\\templates\\blog.html.twig");
    }
}
