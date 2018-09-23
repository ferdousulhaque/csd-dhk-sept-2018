<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    /**
     * @Given i am on first step
     */
    public function iAmOnFirstStep()
    {
        //throw new \Codeception\Exception\Incomplete("Step `i am on first step` is not defined");
    }

   /**
    * @When i click to go to next step
    */
    public function iClickToGoToNextStep()
    {
        //throw new \Codeception\Exception\Incomplete("Step `i click to go to next step` is not defined");
    }

   /**
    * @Then i see third step
    */
    public function iSeeThirdStep()
    {
        //throw new \Codeception\Exception\Incomplete("Step `i see third step` is not defined");
    }

}
