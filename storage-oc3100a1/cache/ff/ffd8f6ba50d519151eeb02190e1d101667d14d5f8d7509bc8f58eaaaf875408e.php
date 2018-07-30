<?php

/* default/template/account/return_list.twig */
class __TwigTemplate_dd5b97d1576ebd52b25f9d32b660a1865f3e527d690c275aa0f96f78c6aab8cf extends Twig_Template
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
<div id=\"account-return\" class=\"container\">
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
      ";
        // line 18
        if (($context["returns"] ?? null)) {
            // line 19
            echo "        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">
            <thead>
              <tr>
                <th class=\"text-right\">";
            // line 23
            echo ($context["column_return_id"] ?? null);
            echo "</th>
                <th class=\"text-left\">";
            // line 24
            echo ($context["column_status"] ?? null);
            echo "</th>
                <th class=\"text-left\">";
            // line 25
            echo ($context["column_date_added"] ?? null);
            echo "</th>
                <th class=\"text-right\">";
            // line 26
            echo ($context["column_order_id"] ?? null);
            echo "</th>
                <th class=\"text-left\">";
            // line 27
            echo ($context["column_customer"] ?? null);
            echo "</th>
                <th class=\"text-right\">";
            // line 28
            echo ($context["column_action"] ?? null);
            echo "</th>
              </tr>
            </thead>
            <tbody>
              ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["returns"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["return"]) {
                // line 33
                echo "                <tr>
                  <td class=\"text-right\">#";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["return"], "return_id", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["return"], "status", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["return"], "date_added", array());
                echo "</td>
                  <td class=\"text-right\">";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["return"], "order_id", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["return"], "name", array());
                echo "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["return"], "href", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "            </tbody>
          </table>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
            // line 46
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-right\">";
            // line 47
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
      ";
        } else {
            // line 50
            echo "        <p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
      ";
        }
        // line 52
        echo "      <div class=\"buttons clearfix\">
        <div class=\"float-right\"><a href=\"";
        // line 53
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 55
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 56
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 58
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/account/return_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 58,  191 => 56,  187 => 55,  180 => 53,  177 => 52,  171 => 50,  165 => 47,  161 => 46,  155 => 42,  144 => 39,  140 => 38,  136 => 37,  132 => 36,  128 => 35,  124 => 34,  121 => 33,  117 => 32,  110 => 28,  106 => 27,  102 => 26,  98 => 25,  94 => 24,  90 => 23,  84 => 19,  82 => 18,  78 => 17,  71 => 16,  68 => 15,  65 => 14,  62 => 13,  59 => 12,  56 => 11,  53 => 10,  51 => 9,  47 => 8,  44 => 7,  33 => 5,  29 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/account/return_list.twig", "C:\\MAMP\\htdocs\\oc3100a1\\opencart\\upload\\catalog\\view\\theme\\default\\template\\account\\return_list.twig");
    }
}
