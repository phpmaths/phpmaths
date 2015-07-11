<?php namespace PhpMaths\PhpMaths;

/**
 * Offers all basic trigonometric fuctions, including hyperbolic and inverse.
 *
 * @see https://en.wikipedia.org/wiki/Trigonometric_functions
 * @see https://en.wikipedia.org/wiki/Inverse_trigonometric_functions
 * @see https://en.wikipedia.org/wiki/Hyperbolic_function
 * @see https://en.wikipedia.org/wiki/Inverse_hyperbolic_function
 */
class Trigonometry
{

    /**
     * Sine.
     *
     * @param float $arg The angle in radians.
     *
     * @return float The sine of `$arg`.
     */
    public static function sin($arg)
    {
        return sin($arg);
    }

    /**
     * Cosine.
     *
     * @param float $arg The angle in radians.
     *
     * @return float The cosine of `$arg`.
     */
    public static function cos($arg)
    {
        return cos($arg);
    }

    /**
     * Tangent.
     *
     * @param float $arg The angle in radians.
     *
     * @return float The tangent of `$arg`.
     */
    public static function tan($arg)
    {
        return tan($arg);
    }

    /**
     * Cotangent.
     *
     * @param float $arg The angle in radians.
     *
     * @return float The cotangent of `$arg`.
     */
    public static function cot($arg)
    {
        return tan(M_PI_2 - $arg);
    }

    /**
     * Secant.
     *
     * @param float $arg The angle in radians.
     *
     * @return float The secant of `$arg`.
     */
    public static function sec($arg)
    {
        return 1 / cos($arg);
    }

    /**
     * Cosecant.
     *
     * @param float $arg The angle in radians.
     *
     * @return float The cosecant of `$arg`.
     */
    public static function csc($arg)
    {
        return 1 / sin($arg);
    }

    /**
     * Inverse sine.
     *
     * @param float $arg The sine of the angle.
     *
     * @return float The angle in radians corresponding to `$arg`.
     */
    public static function asin($arg)
    {
        return asin($arg);
    }


    /**
     * Inverse cosine.
     *
     * @param float $arg The cosine of the angle.
     *
     * @return float The angle in radians corresponding to `$arg`.
     */
    public static function acos($arg)
    {
        return acos($arg);
    }

    /**
     * Inverse tangent.
     *
     * @param float $arg The tangent of the angle.
     *
     * @return float The angle in radians corresponding to `$arg`.
     */
    public static function atan($arg)
    {
        return atan($arg);
    }

    /**
     * Inverse cotangent.
     *
     * @param float $arg The cotangent of the angle.
     *
     * @return float The angle in radians corresponding to `$arg`.
     */
    public static function acot($arg)
    {
        return M_PI_2 - atan($arg);
    }

    /**
     * Inverse secant.
     *
     * @param float $arg The secant of the angle.
     *
     * @return float The angle in radians corresponding to `$arg`.
     */
    public static function asec($arg)
    {
        return acos(1 / $arg);
    }

    /**
     * Inverse cosecant.
     *
     * @param float $arg The cosecant of the angle.
     *
     * @return float The angle in radians corresponding to `$arg`.
     */
    public static function acsc($arg)
    {
        return asin(1 / $arg);
    }

    /**
     * Hyperbolic sine.
     *
     * @param float $arg The angle in radians.
     *
     * @return float The hyperbolic sine of the angle.
     */
    public static function sinh($arg)
    {
        return sinh($arg);
    }

    /**
     * Hyperbolic cosine.
     *
     * @param float $arg The angle in radians.
     *
     * @return float The hyperbolic cosine of the angle.
     */
    public static function cosh($arg)
    {
        return cosh($arg);
    }

    /**
     * Hyperbolic tangent.
     *
     * @param float $arg The angle in radians.
     *
     * @return float The hyperbolic tangent of the angle.
     */
    public static function tanh($arg)
    {
        return tanh($arg);
    }

    /**
     * Hyperbolic cotangent.
     *
     * @param float $arg The angle in radians.
     *
     * @return float The hyperbolic cotangent of the angle.
     */
    public static function coth($arg)
    {
        return cosh($arg) / sinh($arg);
    }

    /**
     * Hyperbolic secant.
     *
     * @param float $arg The angle in radians.
     *
     * @return float The hyperbolic secant of the angle.
     */
    public static function sech($arg)
    {
        return 1 / cosh($arg);
    }

    /**
     * Hyperbolic cosecant.
     *
     * @param float $arg The angle in radians.
     *
     * @return float The hyperbolic cosecant of the angle.
     */
    public static function csch($arg)
    {
        return 1 / sinh($arg);
    }

    /**
     * Inverse hyperbolic sine.
     *
     * @param float $arg The hyperbolic sine of the angle.
     *
     * @return float The angle in radians corresponding to `$arg`.
     */
    public static function arsinh($arg)
    {
        return asinh($arg);
    }

    /**
     * Inverse hyperbolic cosine.
     *
     * @param float $arg The hyperbolic cosine of the angle.
     *
     * @return float The angle in radians corresponding to `$arg`.
     */
    public static function arcosh($arg)
    {
        return acosh($arg);
    }

    /**
     * Inverse hyperbolic tangent.
     *
     * @param float $arg The hyperbolic tangent of the angle.
     *
     * @return float The angle in radians corresponding to `$arg`.
     */
    public static function artanh($arg)
    {
        return atanh($arg);
    }

    /**
     * Inverse hyperbolic cotangent.
     *
     * @param float $arg The hyperbolic cotangent of the angle.
     *
     * @return float The angle in radians corresponding to `$arg`.
     */
    public static function arcoth($arg)
    {
        return atanh(1 / $arg);
    }

    /**
     * Inverse hyperbolic secant.
     *
     * @param float $arg The hyperbolic secant of the angle.
     *
     * @return float The angle in radians corresponding to `$arg`.
     */
    public static function arsech($arg)
    {
        return acosh(1 / $arg);
    }

    /**
     * Inverse hyperbolic cosecant.
     *
     * @param float $arg The hyperbolic cosecant of the angle.
     *
     * @return float The angle in radians corresponding to `$arg`.
     */
    public static function arcsch($arg)
    {
        return asinh(1 / $arg);
    }
}
