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
    # Represents an amount of money with its currency type.
    # @!attribute [rw] currency_code
    #   @return [String]
    #     The three-letter currency code defined in ISO 4217.
    # @!attribute [rw] units
    #   @return [Integer]
    #     The whole units of the amount.
    #     For example if `currencyCode` is `"USD"`, then 1 unit is one US dollar.
    # @!attribute [rw] nanos
    #   @return [Integer]
    #     Number of nano (10^-9) units of the amount.
    #     The value must be between -999,999,999 and +999,999,999 inclusive.
    #     If `units` is positive, `nanos` must be positive or zero.
    #     If `units` is zero, `nanos` can be positive, zero, or negative.
    #     If `units` is negative, `nanos` must be negative or zero.
    #     For example $-1.75 is represented as `units`=-1 and `nanos`=-750,000,000.
    class Money; end
  end
end