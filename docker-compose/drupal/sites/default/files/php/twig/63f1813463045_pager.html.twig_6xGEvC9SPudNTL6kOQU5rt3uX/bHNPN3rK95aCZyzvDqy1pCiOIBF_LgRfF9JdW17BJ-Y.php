<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/themes/claro/templates/pager.html.twig */
class __TwigTemplate_d27120146b81b2b7a6ea426b62c835d1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        if (($context["items"] ?? null)) {
            // line 38
            echo "  <nav class=\"pager\" role=\"navigation\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            echo "\">
    <ul class=\"pager__items js-pager__items\">
      ";
            // line 41
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 41)) {
                // line 42
                echo "        ";
                ob_start(function () { return ''; });
                // line 43
                echo "        <li class=\"pager__item pager__item--action pager__item--first\">
          <a href=\"";
                // line 44
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 44), "href", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                echo "\" class=\"pager__link pager__link--action-link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 44), "attributes", [], "any", false, false, true, 44), 44, $this->source), "href", "title"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 45
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                echo "</span>
            <span class=\"pager__item-title pager__item-title--backwards\" aria-hidden=\"true\">
              ";
                // line 47
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 47), "text", [], "any", true, true, true, 47)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 47), "text", [], "any", false, false, true, 47), 47, $this->source), t("First"))) : (t("First"))), ["«" => ""]), "html", null, true);
                echo "
            </span>
          </a>
        </li>
        ";
                $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_0_));
                // line 52
                echo "      ";
            }
            // line 53
            echo "
      ";
            // line 55
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 55)) {
                // line 56
                echo "        ";
                ob_start(function () { return ''; });
                // line 57
                echo "        <li class=\"pager__item pager__item--action pager__item--previous\">
          <a href=\"";
                // line 58
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 58), "href", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                echo "\" class=\"pager__link pager__link--action-link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 58), "attributes", [], "any", false, false, true, 58), 58, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 59
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                echo "</span>
            <span class=\"pager__item-title pager__item-title--backwards\" aria-hidden=\"true\">
              ";
                // line 61
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 61), "text", [], "any", true, true, true, 61)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 61), "text", [], "any", false, false, true, 61), 61, $this->source), t("Previous"))) : (t("Previous"))), ["‹" => ""]), "html", null, true);
                echo "
            </span>
          </a>
        </li>
        ";
                $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 56
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_1_));
                // line 66
                echo "      ";
            }
            // line 67
            echo "
      ";
            // line 69
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 69)) {
                // line 70
                echo "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 72
            echo "
      ";
            // line 74
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 74));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 75
                echo "        ";
                ob_start(function () { return ''; });
                // line 76
                echo "        <li class=\"pager__item";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" pager__item--active") : ("")));
                echo " pager__item--number\">
          ";
                // line 77
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 78
                    echo "            ";
                    $context["title"] = t("Current page");
                    // line 79
                    echo "          ";
                } else {
                    // line 80
                    echo "            ";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 81
                    echo "          ";
                }
                // line 82
                echo "          <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                echo "\" class=\"pager__link";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" is-active") : ("")));
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 82, $this->source), "html", null, true);
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 82), 82, $this->source), "href", "title", "class"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">
              ";
                // line 84
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                echo "
            </span>
            ";
                // line 86
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 86, $this->source), "html", null, true);
                echo "
          </a>
        </li>
        ";
                $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 75
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_2_));
                // line 90
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "
      ";
            // line 93
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 93)) {
                // line 94
                echo "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 96
            echo "
      ";
            // line 98
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 98)) {
                // line 99
                echo "        ";
                ob_start(function () { return ''; });
                // line 100
                echo "        <li class=\"pager__item pager__item--action pager__item--next\">
          <a href=\"";
                // line 101
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 101), "href", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
                echo "\" class=\"pager__link pager__link--action-link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 101), "attributes", [], "any", false, false, true, 101), 101, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 102
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                echo "</span>
            <span class=\"pager__item-title pager__item-title--forward\" aria-hidden=\"true\">
              ";
                // line 104
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 104), "text", [], "any", true, true, true, 104)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 104), "text", [], "any", false, false, true, 104), 104, $this->source), t("Next"))) : (t("Next"))), ["›" => ""]), "html", null, true);
                echo "
            </span>
          </a>
        </li>
        ";
                $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 99
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_3_));
                // line 109
                echo "      ";
            }
            // line 110
            echo "
      ";
            // line 112
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 112)) {
                // line 113
                echo "        ";
                ob_start(function () { return ''; });
                // line 114
                echo "        <li class=\"pager__item pager__item--action pager__item--last\">
          <a href=\"";
                // line 115
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 115), "href", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
                echo "\" class=\"pager__link pager__link--action-link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 115), "attributes", [], "any", false, false, true, 115), 115, $this->source), "href", "title"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 116
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                echo "</span>
            <span class=\"pager__item-title pager__item-title--forward\" aria-hidden=\"true\">
              ";
                // line 118
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 118), "text", [], "any", true, true, true, 118)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 118), "text", [], "any", false, false, true, 118), 118, $this->source), t("Last"))) : (t("Last"))), ["»" => ""]), "html", null, true);
                echo "
            </span>
          </a>
        </li>
        ";
                $___internal_parse_4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 113
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_4_));
                // line 123
                echo "      ";
            }
            // line 124
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 124,  275 => 123,  273 => 113,  265 => 118,  260 => 116,  252 => 115,  249 => 114,  246 => 113,  243 => 112,  240 => 110,  237 => 109,  235 => 99,  227 => 104,  222 => 102,  214 => 101,  211 => 100,  208 => 99,  205 => 98,  202 => 96,  198 => 94,  195 => 93,  192 => 91,  186 => 90,  184 => 75,  177 => 86,  172 => 84,  160 => 82,  157 => 81,  154 => 80,  151 => 79,  148 => 78,  146 => 77,  141 => 76,  138 => 75,  133 => 74,  130 => 72,  126 => 70,  123 => 69,  120 => 67,  117 => 66,  115 => 56,  107 => 61,  102 => 59,  94 => 58,  91 => 57,  88 => 56,  85 => 55,  82 => 53,  79 => 52,  77 => 42,  69 => 47,  64 => 45,  56 => 44,  53 => 43,  50 => 42,  47 => 41,  41 => 38,  39 => 37,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/claro/templates/pager.html.twig", "/opt/drupal/web/core/themes/claro/templates/pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 37, "apply" => 42, "for" => 74, "set" => 78);
        static $filters = array("t" => 38, "escape" => 44, "without" => 44, "replace" => 47, "default" => 47, "spaceless" => 42);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'apply', 'for', 'set'],
                ['t', 'escape', 'without', 'replace', 'default', 'spaceless'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
