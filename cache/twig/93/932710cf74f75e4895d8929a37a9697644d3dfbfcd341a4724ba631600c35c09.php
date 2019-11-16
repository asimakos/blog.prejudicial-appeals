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

/* partials/header.html.twig */
class __TwigTemplate_5a4347924e95f16054096f5189000e40f6102ac3ddb9bbe47ea2b52a6bc26f7a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<nav class=\"navbar navbar-expand-sm bg-dark navbar-dark\">
  
   <a class=\"navbar-brand\" href=\"";
        // line 3
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "title", []);
        echo "</a>
    
    <ul class=\"navbar-nav\">
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 7
            echo "          ";
            if ($this->getAttribute($context["page"], "visible", [])) {
                // line 8
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
                // line 9
                echo "            <li class=\"nav-item\">
              <a class = \"nav-link ";
                // line 10
                echo ($context["current_page"] ?? null);
                echo "\" href = \"";
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">";
                echo $this->getAttribute($context["page"], "title", []);
                echo "</a>
            </li>
          ";
            }
            // line 13
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </ul>
  
</nav>";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 14,  65 => 13,  55 => 10,  52 => 9,  49 => 8,  46 => 7,  42 => 6,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-sm bg-dark navbar-dark\">
  
   <a class=\"navbar-brand\" href=\"{{base_url == '' ? '/': base_url}}\">{{config.site.title}}</a>
    
    <ul class=\"navbar-nav\">
      {% for page in pages.children %}
          {% if page.visible %}
            {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
            <li class=\"nav-item\">
              <a class = \"nav-link {{ current_page }}\" href = \"{{ page.url }}\">{{ page.title }}</a>
            </li>
          {% endif %}
      {% endfor %}
    </ul>
  
</nav>", "partials/header.html.twig", "C:\\Program Files\\Ampps\\www\\appeals\\user\\themes\\theme-bootstrap\\templates\\partials\\header.html.twig");
    }
}
