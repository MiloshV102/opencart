<?php

/* default/template/account/tracking.twig */
class __TwigTemplate_76e1b78fbe0c73ae7a3503a9d89df17095bd65d07bc6e0a4dcc0357ef889ade4 extends Twig_Template
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
<div id=\"account-tracking\" class=\"container\">
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
        echo "\">
      ";
        // line 17
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 18
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <p>";
        // line 19
        echo ($context["text_description"] ?? null);
        echo "</p>
      <form>
        <div class=\"form-group row\">
          <label class=\"col-md-2 col-form-label\" for=\"input-code\">";
        // line 22
        echo ($context["entry_code"] ?? null);
        echo "</label>
          <div class=\"col-md-10\">
            <textarea cols=\"40\" rows=\"5\" placeholder=\"";
        // line 24
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"input-code\" class=\"form-control\">";
        echo ($context["code"] ?? null);
        echo "</textarea>
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"col-md-2 col-form-label\" for=\"input-generator\"><span data-toggle=\"tooltip\" title=\"";
        // line 28
        echo ($context["help_generator"] ?? null);
        echo "\">";
        echo ($context["entry_generator"] ?? null);
        echo "</span></label>
          <div class=\"col-md-10\">
            <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 30
        echo ($context["entry_generator"] ?? null);
        echo "\" id=\"input-generator\" class=\"form-control\"/>
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"col-md-2 col-form-label\" for=\"input-link\">";
        // line 34
        echo ($context["entry_link"] ?? null);
        echo "</label>
          <div class=\"col-md-10\">
            <textarea name=\"link\" cols=\"40\" rows=\"5\" placeholder=\"";
        // line 36
        echo ($context["entry_link"] ?? null);
        echo "\" id=\"input-link\" class=\"form-control\"></textarea>
          </div>
        </div>
      </form>
      <div class=\"buttons clearfix\">
        <div class=\"float-right\"><a href=\"";
        // line 41
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 43
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 45
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('input[name=\\'product\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=account/tracking/autocomplete&filter_name=' + encodeURIComponent(request) + '&tracking=' + encodeURIComponent(\$('#input-code').val()),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['link']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'product\\']').val(item['label']);
\t\t\$('textarea[name=\\'link\\']').val(item['value']);
\t}
});
//--></script>
";
        // line 70
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/account/tracking.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 70,  143 => 45,  138 => 43,  131 => 41,  123 => 36,  118 => 34,  111 => 30,  104 => 28,  95 => 24,  90 => 22,  84 => 19,  80 => 18,  76 => 17,  71 => 16,  68 => 15,  65 => 14,  62 => 13,  59 => 12,  56 => 11,  53 => 10,  51 => 9,  47 => 8,  44 => 7,  33 => 5,  29 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/account/tracking.twig", "C:\\MAMP\\htdocs\\oc3100a1\\opencart\\upload\\catalog\\view\\theme\\default\\template\\account\\tracking.twig");
    }
}
