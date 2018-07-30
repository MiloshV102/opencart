<?php

/* default/template/account/newsletter.twig */
class __TwigTemplate_9418d8966008fb8cf23767bb75d0e6134f0b016cf25a6a46fd897f77360744a0 extends Twig_Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"account-newsletter\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", array());
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <form action=\"";
        // line 18
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <fieldset>
          <div class=\"form-group row mb-0\">
            <label class=\"col-md-3 col-form-label\">";
        // line 21
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
            <div class=\"col-md-9\">
              ";
        // line 23
        if (($context["newsletter"] ?? null)) {
            // line 24
            echo "              <div class=\"form-check form-check-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"1\" id=\"input-newsletter-yes\" class=\"form-check-input\" checked=\"checked\"/> <label class=\"form-check-label\" for=\"input-newsletter-yes\">";
            // line 25
            echo ($context["text_yes"] ?? null);
            echo "</label>
              </div>
              <div class=\"form-check form-check-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"0\" id=\"input-newsletter-no\" class=\"form-check-input\"/> <label class=\"form-check-label\" for=\"input-newsletter-no\">";
            // line 28
            echo ($context["text_no"] ?? null);
            echo "</label>
              </div>
              ";
        } else {
            // line 31
            echo "              <div class=\"form-check form-check-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"1\" id=\"input-newsletter-yes\" class=\"form-check-input\"/> <label class=\"form-check-label\" for=\"input-newsletter-yes\">";
            // line 32
            echo ($context["text_yes"] ?? null);
            echo "</label>
              </div>
              <div class=\"form-check form-check-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"0\" id=\"input-newsletter-no\" class=\"form-check-input\" checked=\"checked\"/> <label class=\"form-check-label\" for=\"input-newsletter-no\">";
            // line 35
            echo ($context["text_no"] ?? null);
            echo "</label>
              </div>
            </div>
            ";
        }
        // line 39
        echo "          </div>
        </fieldset>
        <div class=\"buttons clearfix\">
          <div class=\"float-left\"><a href=\"";
        // line 42
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-light\">";
        echo ($context["button_back"] ?? null);
        echo "</a></div>
          <div class=\"float-right\">
            <input type=\"submit\" value=\"";
        // line 44
        echo ($context["button_continue"] ?? null);
        echo "\" class=\"btn btn-primary\"/>
          </div>
        </div>
      </form>
      ";
        // line 48
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 50
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 52
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/account/newsletter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 52,  150 => 50,  145 => 48,  138 => 44,  131 => 42,  126 => 39,  119 => 35,  113 => 32,  110 => 31,  104 => 28,  98 => 25,  95 => 24,  93 => 23,  88 => 21,  82 => 18,  78 => 17,  71 => 16,  68 => 15,  65 => 14,  62 => 13,  59 => 12,  56 => 11,  53 => 10,  51 => 9,  47 => 8,  44 => 7,  33 => 5,  29 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/account/newsletter.twig", "C:\\MAMP\\htdocs\\oc3100a1\\opencart\\upload\\catalog\\view\\theme\\default\\template\\account\\newsletter.twig");
    }
}
