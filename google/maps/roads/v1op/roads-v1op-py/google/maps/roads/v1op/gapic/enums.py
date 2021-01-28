# -*- coding: utf-8 -*-
#
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

"""Wrappers for protocol buffer enum types."""

import enum


class TravelMode(enum.IntEnum):
    """
    An enum representing the mode of travel used for snapping.

    Attributes:
      TRAVEL_MODE_UNSPECIFIED (int)
      DRIVING (int)
      CYCLING (int)
      WALKING (int)
    """
    TRAVEL_MODE_UNSPECIFIED = 0
    DRIVING = 1
    CYCLING = 2
    WALKING = 3
