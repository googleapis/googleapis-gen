# Copyright 2020 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     https://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

module Google
  module Type
    # An object that represents a latitude/longitude pair. This is expressed as a
    # pair of doubles to represent degrees latitude and degrees longitude. Unless
    # specified otherwise, this must conform to the
    # <a href="http://www.unoosa.org/pdf/icg/2012/template/WGS_84.pdf">WGS84
    # standard</a>. Values must be within normalized ranges.
    # @!attribute [rw] latitude
    #   @return [Float]
    #     The latitude in degrees. It must be in the range [-90.0, +90.0].
    # @!attribute [rw] longitude
    #   @return [Float]
    #     The longitude in degrees. It must be in the range [-180.0, +180.0].
    class LatLng; end
  end
end