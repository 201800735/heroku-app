<?php

/* partials/iheader.html.twig */
class __TwigTemplate_63aaa237d13a693b72092680fb5c480cddd14f94c241c8de81be923cae1cd14b extends Twig_Template
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
        // line 1
        echo "<!-- old nav
<nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Julius</a>
        </div>
        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 16
        echo "
            </ul>
        </div>
    </div>
</nav>
-->

<nav id=\"main-nav\" class=\"navbar navbar-fixed-top\">
    <div class=\"container\">
        <a href=\"#\" class=\"navbar-brand\">Logo</a>

        <ul class=\"nav navbar-nav navbar-right\">
            ";
        // line 29
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 30
            echo "                ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 31
                echo "                    ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 32
                echo "                    <li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\"><a href=\"";
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "</a></li>
                ";
            }
            // line 34
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </ul>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "partials/iheader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 35,  70 => 34,  60 => 32,  57 => 31,  54 => 30,  49 => 29,  35 => 16,  19 => 1,);
    }
}
/* <!-- old nav*/
/* <nav class="navbar navbar-default navbar-static-top" role="navigation">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="#">Julius</a>*/
/*         </div>*/
/*         <div class="navbar-collapse collapse">*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 {# some twig engine code #}*/
/* */
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
/* -->*/
/* */
/* <nav id="main-nav" class="navbar navbar-fixed-top">*/
/*     <div class="container">*/
/*         <a href="#" class="navbar-brand">Logo</a>*/
/* */
/*         <ul class="nav navbar-nav navbar-right">*/
/*             {# some twig engine code #}*/
/*             {% for page in pages.children %}*/
/*                 {% if page.visible %}*/
/*                     {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}*/
/*                     <li class="{{ current_page }}"><a href="{{ page.url }}">{{ page.menu }}</a></li>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* </nav>*/
