<?php
/**
 * Encapsulates a getRegion "callback" and how the region's coordinates
 * should be used.
 */
interface RegionProvider {
    /**
     *
     * @return A region with "as is" viewport coordinates.
     */
    public function getRegion();

    /**
     *
     * @return The type of coordinates on which the region is based.
     */
    public function getCoordinatesType();

}
