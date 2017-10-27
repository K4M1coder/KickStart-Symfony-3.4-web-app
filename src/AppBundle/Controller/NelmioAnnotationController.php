<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class NelmioAnnotationController extends Controller
{
    public function indexAction($name)
    {
    }

    /**
     * The get Action is a very important part of the program
     *
     * @ApiDoc(
     *  resource=true,
     *  description="This is a description of your API method",
     *  filters={
     *      {"name"="a-filter", "dataType"="integer"},
     *      {"name"="another-filter", "dataType"="string", "pattern"="(foo|bar) ASC|DESC"}
     *  }
     * )
     */
    public function getAction()
    {
        $this->Deprecated();
        $this->headers();
        $this->statusCodes();
    }

    /**
     * @ApiDoc(
     *  description="Create a new Object",
     *  input="Your\Namespace\Form\Type\YourType",
     *  output="Your\Namespace\Class"
     * )
     */
    public function postAction()
    {
    }

    /**
     * @ApiDoc(
     *      description="Returns a collection of Object",
     *      requirements={
     *          {
     *          "name"="limit",
     *          "dataType"="integer",
     *          "requirement"="\d+",
     *          "description"="how many objects to return"
     *          }
     *      },
     *      parameters={
     *          {"name"="categoryId", "dataType"="integer", "required"=true, "description"="category id"}
     *      },
     *      tags={
     *          "stable",
     *          "deprecated" = "#ff0000"
     *      },
     *      headers={
     *         {
     *             "name"="X-AUTHORIZE-KEY",
     *             "description"="Authorization key"
     *         }
     *     },
     *     statusCodes={
     *         200="Returned when successful",
     *         403="Returned when the user is not authorized to say hello",
     *         404={
     *           "Returned when the user is not found",
     *           "Returned when something else is not found"
     *         }
     *     }
     * )
     */
    public function cgetAction($limit)
    {
        $this->Deprecated();
        $this->headers();
        $this->statusCodes();
    }

}
