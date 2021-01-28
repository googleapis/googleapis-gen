# frozen_string_literal: true

# Copyright 2021 Google LLC
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

# Auto-generated by gapic-generator-ruby. DO NOT EDIT!


module Google
  module Ads
    module GoogleAds
      module V3
        module Enums
          # Container for enum describing a promotion extension occasion.
          # For more information about the occasions please check:
          # https://support.google.com/google-ads/answer/7367521
          class PromotionExtensionOccasionEnum
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # A promotion extension occasion.
            module PromotionExtensionOccasion
              # Not specified.
              UNSPECIFIED = 0

              # Used for return value only. Represents value unknown in this version.
              UNKNOWN = 1

              # New Year's.
              NEW_YEARS = 2

              # Chinese New Year.
              CHINESE_NEW_YEAR = 3

              # Valentine's Day.
              VALENTINES_DAY = 4

              # Easter.
              EASTER = 5

              # Mother's Day.
              MOTHERS_DAY = 6

              # Father's Day.
              FATHERS_DAY = 7

              # Labor Day.
              LABOR_DAY = 8

              # Back To School.
              BACK_TO_SCHOOL = 9

              # Halloween.
              HALLOWEEN = 10

              # Black Friday.
              BLACK_FRIDAY = 11

              # Cyber Monday.
              CYBER_MONDAY = 12

              # Christmas.
              CHRISTMAS = 13

              # Boxing Day.
              BOXING_DAY = 14

              # Independence Day in any country.
              INDEPENDENCE_DAY = 15

              # National Day in any country.
              NATIONAL_DAY = 16

              # End of any season.
              END_OF_SEASON = 17

              # Winter Sale.
              WINTER_SALE = 18

              # Summer sale.
              SUMMER_SALE = 19

              # Fall Sale.
              FALL_SALE = 20

              # Spring Sale.
              SPRING_SALE = 21

              # Ramadan.
              RAMADAN = 22

              # Eid al-Fitr.
              EID_AL_FITR = 23

              # Eid al-Adha.
              EID_AL_ADHA = 24

              # Singles Day.
              SINGLES_DAY = 25

              # Women's Day.
              WOMENS_DAY = 26

              # Holi.
              HOLI = 27

              # Parent's Day.
              PARENTS_DAY = 28

              # St. Nicholas Day.
              ST_NICHOLAS_DAY = 29

              # Carnival.
              CARNIVAL = 30

              # Epiphany, also known as Three Kings' Day.
              EPIPHANY = 31

              # Rosh Hashanah.
              ROSH_HASHANAH = 32

              # Passover.
              PASSOVER = 33

              # Hanukkah.
              HANUKKAH = 34

              # Diwali.
              DIWALI = 35

              # Navratri.
              NAVRATRI = 36

              # Available in Thai: Songkran.
              SONGKRAN = 37

              # Available in Japanese: Year-end Gift.
              YEAR_END_GIFT = 38
            end
          end
        end
      end
    end
  end
end
