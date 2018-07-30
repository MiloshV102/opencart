<?php

/* default/template/account/download.twig */
class __TwigTemplate_9126d31b43bcc71b2cb59a0b31713a09650195fa270b5db14537a14c39004b28 extends Twig_Template
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
<div id=\"account-download\" class=\"container\">
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
        if (($context["downloads"] ?? null)) {
            // line 19
            echo "        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">
            <thead>
              <tr>
                <td class=\"text-right\">";
            // line 23
            echo ($context["column_order_id"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 24
            echo ($context["column_name"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 25
            echo ($context["column_size"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 26
            echo ($context["column_date_added"] ?? null);
            echo "</td>
                <td></td>
              </tr>
            </thead>
            <tbody>
              ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["downloads"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["download"]) {
                // line 32
                echo "                <tr>
                  <td class=\"text-right\">";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["download"], "order_id", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["download"], "name", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["download"], "size", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["download"], "date_added", array());
                echo "</td>
                  <td><a href=\"";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["download"], "href", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_download"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-cloud-download\"></i></a></td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['download'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "            </tbody>
          </table>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
            // line 44
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-right\">";
            // line 45
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
      ";
        } else {
            // line 48
            echo "        <p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
      ";
        }
        // line 50
        echo "      <div class=\"buttons clearfix\">
        <div class=\"float-right\"><a href=\"";
        // line 51
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 53
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 54
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 56
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/account/download.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 56,  180 => 54,  176 => 53,  169 => 51,  166 => 50,  160 => 48,  154 => 45,  150 => 44,  144 => 40,  133 => 37,  129 => 36,  125 => 35,  121 => 34,  117 => 33,  114 => 32,  110 => 31,  102 => 26,  98 => 25,  94 => 24,  90 => 23,  84 => 19,  82 => 18,  78 => 17,  71 => 16,  68 => 15,  65 => 14,  62 => 13,  59 => 12,  56 => 11,  53 => 10,  51 => 9,  47 => 8,  44 => 7,  33 => 5,  29 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/account/download.twig", "C:\\MAMP\\htdocs\\oc3100a1\\opencart\\upload\\catalog\\view\\theme\\default\\template\\account\\download.twig");
    }
}
