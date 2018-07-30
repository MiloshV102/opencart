<?php

/* default/template/account/reward.twig */
class __TwigTemplate_aa23c4a627cf6429d5114f9138c01588a67f0c924dcf4197e953d45390d65b7a extends Twig_Template
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
<div id=\"account-reward\" class=\"container\">
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
      <p>";
        // line 18
        echo ($context["text_total"] ?? null);
        echo " <b>";
        echo ($context["total"] ?? null);
        echo "</b>.</p>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <th class=\"text-left\">";
        // line 23
        echo ($context["column_date_added"] ?? null);
        echo "</th>
              <th class=\"text-left\">";
        // line 24
        echo ($context["column_description"] ?? null);
        echo "</th>
              <th class=\"text-right\">";
        // line 25
        echo ($context["column_points"] ?? null);
        echo "</th>
            </tr>
          </thead>
          <tbody>

            ";
        // line 30
        if (($context["rewards"] ?? null)) {
            // line 31
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rewards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reward"]) {
                // line 32
                echo "                <tr>
                  <td class=\"text-left\">";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["reward"], "date_added", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 34
                if (twig_get_attribute($this->env, $this->source, $context["reward"], "order_id", array())) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["reward"], "href", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["reward"], "description", array());
                    echo "</a> ";
                } else {
                    // line 35
                    echo "                      ";
                    echo twig_get_attribute($this->env, $this->source, $context["reward"], "description", array());
                    echo "
                    ";
                }
                // line 36
                echo "</td>
                  <td class=\"text-right\">";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["reward"], "points", array());
                echo "</td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reward'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "            ";
        } else {
            // line 41
            echo "              <tr>
                <td class=\"text-center\" colspan=\"3\">";
            // line 42
            echo ($context["text_no_results"] ?? null);
            echo "</td>
              </tr>
            ";
        }
        // line 45
        echo "          </tbody>

        </table>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
        // line 50
        echo ($context["pagination"] ?? null);
        echo "</div>
        <div class=\"col-sm-6 text-right\">";
        // line 51
        echo ($context["results"] ?? null);
        echo "</div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"float-right\"><a href=\"";
        // line 54
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 56
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 57
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 59
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/account/reward.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 59,  188 => 57,  184 => 56,  177 => 54,  171 => 51,  167 => 50,  160 => 45,  154 => 42,  151 => 41,  148 => 40,  139 => 37,  136 => 36,  130 => 35,  122 => 34,  118 => 33,  115 => 32,  110 => 31,  108 => 30,  100 => 25,  96 => 24,  92 => 23,  82 => 18,  78 => 17,  71 => 16,  68 => 15,  65 => 14,  62 => 13,  59 => 12,  56 => 11,  53 => 10,  51 => 9,  47 => 8,  44 => 7,  33 => 5,  29 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/account/reward.twig", "C:\\MAMP\\htdocs\\oc3100a1\\opencart\\upload\\catalog\\view\\theme\\default\\template\\account\\reward.twig");
    }
}
