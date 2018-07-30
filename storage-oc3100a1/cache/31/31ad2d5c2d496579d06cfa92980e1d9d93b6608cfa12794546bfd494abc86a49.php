<?php

/* default/template/common/header.twig */
class __TwigTemplate_d7fd47487cfe6058b0a0ec2e17d7874b47771927629bfe53c07785a8746ac72d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]>
<html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]>
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 8
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>";
        // line 14
        echo ($context["title"] ?? null);
        echo "</title>
  <base href=\"";
        // line 15
        echo ($context["base"] ?? null);
        echo "\"/>
  ";
        // line 16
        if (($context["description"] ?? null)) {
            // line 17
            echo "    <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\"/>
  ";
        }
        // line 19
        echo "  ";
        if (($context["keywords"] ?? null)) {
            // line 20
            echo "    <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\"/>
  ";
        }
        // line 22
        echo "  <script src=\"catalog/view/javascript/jquery/jquery-3.3.1.min.js\" type=\"text/javascript\"></script>
  <link href=\"catalog/view/theme/default/stylesheet/bootstrap.css\" rel=\"stylesheet\" media=\"screen\"/>
  <script src=\"catalog/view/javascript/bootstrap/js/popper.min.js\" type=\"text/javascript\"></script>
  <script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
  <link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
  <link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\"/>
  <link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">
  ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 30
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", array());
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", array());
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 33
            echo "    <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
  ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 37
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", array());
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", array());
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 40
            echo "    ";
            echo $context["analytic"];
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</head>
<body>
<nav id=\"top\">
  <div class=\"container\">
    <div class=\"nav float-left\">
      <ul class=\"list-inline\">
        <li class=\"list-inline-item\">";
        // line 48
        echo ($context["currency"] ?? null);
        echo "</li>
        <li class=\"list-inline-item\">";
        // line 49
        echo ($context["language"] ?? null);
        echo "</li>
      </ul>
    </div>
    <div class=\"nav float-right\">
      <ul class=\"list-inline\">
        <li class=\"list-inline-item\"><a href=\"";
        // line 54
        echo ($context["contact"] ?? null);
        echo "\"><i class=\"fa fa-phone\"></i></a> <span class=\"d-none d-md-inline\">";
        echo ($context["telephone"] ?? null);
        echo "</span></li>
        <li class=\"list-inline-item\">
          <div class=\"dropdown\">
            <a href=\"";
        // line 57
        echo ($context["account"] ?? null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> <span class=\"d-none d-md-inline\">";
        echo ($context["text_account"] ?? null);
        echo "</span> <i class=\"fa fa-caret-down\"></i></a>
            <div class=\"dropdown-menu dropdown-menu-right\">
              ";
        // line 59
        if (($context["logged"] ?? null)) {
            // line 60
            echo "                <a href=\"";
            echo ($context["account"] ?? null);
            echo "\" class=\"dropdown-item\">";
            echo ($context["text_account"] ?? null);
            echo "</a>
                <a href=\"";
            // line 61
            echo ($context["order"] ?? null);
            echo "\" class=\"dropdown-item\">";
            echo ($context["text_order"] ?? null);
            echo "</a>
                <a href=\"";
            // line 62
            echo ($context["transaction"] ?? null);
            echo "\" class=\"dropdown-item\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a>
                <a href=\"";
            // line 63
            echo ($context["download"] ?? null);
            echo "\" class=\"dropdown-item\">";
            echo ($context["text_download"] ?? null);
            echo "</a>
                <a href=\"";
            // line 64
            echo ($context["logout"] ?? null);
            echo "\" class=\"dropdown-item\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
              ";
        } else {
            // line 66
            echo "                <a href=\"";
            echo ($context["register"] ?? null);
            echo "\" class=\"dropdown-item\">";
            echo ($context["text_register"] ?? null);
            echo "</a>
                <a href=\"";
            // line 67
            echo ($context["login"] ?? null);
            echo "\" class=\"dropdown-item\">";
            echo ($context["text_login"] ?? null);
            echo "</a>
              ";
        }
        // line 69
        echo "            </div>
          </div>
        </li>
        <li class=\"list-inline-item\"><a href=\"";
        // line 72
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\"><i class=\"fa fa-heart\"></i> <span class=\"d-none d-md-inline\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</span></a></li>
        <li class=\"list-inline-item\"><a href=\"";
        // line 73
        echo ($context["shopping_cart"] ?? null);
        echo "\" title=\"";
        echo ($context["text_shopping_cart"] ?? null);
        echo "\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"d-none d-md-inline\">";
        echo ($context["text_shopping_cart"] ?? null);
        echo "</span></a></li>
        <li class=\"list-inline-item\"><a href=\"";
        // line 74
        echo ($context["checkout"] ?? null);
        echo "\" title=\"";
        echo ($context["text_checkout"] ?? null);
        echo "\"><i class=\"fa fa-share\"></i> <span class=\"d-none d-md-inline\">";
        echo ($context["text_checkout"] ?? null);
        echo "</span></a></li>
      </ul>
    </div>
  </div>
</nav>
<header>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-3 col-lg-4\">
        <div id=\"logo\">
          ";
        // line 84
        if (($context["logo"] ?? null)) {
            // line 85
            echo "            <a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-fluid\"/></a>
          ";
        } else {
            // line 87
            echo "            <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
          ";
        }
        // line 89
        echo "        </div>
      </div>
      <div class=\"col-md-5\">";
        // line 91
        echo ($context["search"] ?? null);
        echo "</div>
      <div class=\"col-md-4 col-lg-3\">";
        // line 92
        echo ($context["cart"] ?? null);
        echo "</div>
    </div>
  </div>
</header>
<main>
  ";
        // line 97
        echo ($context["menu"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 97,  301 => 92,  297 => 91,  293 => 89,  285 => 87,  273 => 85,  271 => 84,  254 => 74,  246 => 73,  238 => 72,  233 => 69,  226 => 67,  219 => 66,  212 => 64,  206 => 63,  200 => 62,  194 => 61,  187 => 60,  185 => 59,  178 => 57,  170 => 54,  162 => 49,  158 => 48,  150 => 42,  141 => 40,  136 => 39,  125 => 37,  121 => 36,  118 => 35,  109 => 33,  104 => 32,  91 => 30,  87 => 29,  78 => 22,  72 => 20,  69 => 19,  63 => 17,  61 => 16,  57 => 15,  53 => 14,  42 => 8,  35 => 6,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/common/header.twig", "C:\\MAMP\\htdocs\\oc3100a1\\opencart\\upload\\catalog\\view\\theme\\default\\template\\common\\header.twig");
    }
}
