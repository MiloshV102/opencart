<?php

/* default/template/account/recurring_list.twig */
class __TwigTemplate_305c2eaf84b163a854aede6f74688af880d36eba6429a88d6ce89e616596433e extends Twig_Template
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
<div id=\"account-recurring\" class=\"container\">
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
        if (($context["recurrings"] ?? null)) {
            // line 19
            echo "        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">
            <thead>
              <tr>
                <td class=\"text-right\">";
            // line 23
            echo ($context["column_order_recurring_id"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 24
            echo ($context["column_product"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 25
            echo ($context["column_status"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 26
            echo ($context["column_date_added"] ?? null);
            echo "</td>
                <td class=\"text-right\"></td>
              </tr>
            </thead>
            <tbody>
              ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 32
                echo "                <tr>
                  <td class=\"text-right\">#";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "order_recurring_id", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "product", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "status", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "date_added", array());
                echo "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "view", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "            </tbody>
          </table>
        </div>
        <div class=\"text-right\">";
            // line 43
            echo ($context["pagination"] ?? null);
            echo "</div>
      ";
        } else {
            // line 45
            echo "        <p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
      ";
        }
        // line 47
        echo "      <div class=\"buttons clearfix\">
        <div class=\"float-right\"><a href=\"";
        // line 48
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 50
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 52
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 55
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/account/recurring_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 55,  175 => 52,  170 => 50,  163 => 48,  160 => 47,  154 => 45,  149 => 43,  144 => 40,  133 => 37,  129 => 36,  125 => 35,  121 => 34,  117 => 33,  114 => 32,  110 => 31,  102 => 26,  98 => 25,  94 => 24,  90 => 23,  84 => 19,  82 => 18,  78 => 17,  71 => 16,  68 => 15,  65 => 14,  62 => 13,  59 => 12,  56 => 11,  53 => 10,  51 => 9,  47 => 8,  44 => 7,  33 => 5,  29 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/account/recurring_list.twig", "C:\\MAMP\\htdocs\\oc3100a1\\opencart\\upload\\catalog\\view\\theme\\default\\template\\account\\recurring_list.twig");
    }
}
