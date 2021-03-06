# -*- coding: utf-8 -*-
# Copyright 2020 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.
#
from .contact_center_insights import (
    CalculateIssueModelStatsRequest,
    CalculateIssueModelStatsResponse,
    CalculateStatsRequest,
    CalculateStatsResponse,
    CreateAnalysisOperationMetadata,
    CreateAnalysisRequest,
    CreateConversationRequest,
    CreatePhraseMatcherRequest,
    DeleteAnalysisRequest,
    DeleteConversationRequest,
    DeletePhraseMatcherRequest,
    ExportInsightsDataMetadata,
    ExportInsightsDataRequest,
    ExportInsightsDataResponse,
    GetAnalysisRequest,
    GetConversationRequest,
    GetIssueModelRequest,
    GetIssueRequest,
    GetPhraseMatcherRequest,
    GetSettingsRequest,
    ListAnalysesRequest,
    ListAnalysesResponse,
    ListConversationsRequest,
    ListConversationsResponse,
    ListIssueModelsRequest,
    ListIssueModelsResponse,
    ListIssuesRequest,
    ListIssuesResponse,
    ListPhraseMatchersRequest,
    ListPhraseMatchersResponse,
    UpdateConversationRequest,
    UpdateSettingsRequest,
    ConversationView,
)
from .resources import (
    Analysis,
    AnalysisResult,
    AnnotationBoundary,
    AnswerFeedback,
    ArticleSuggestionData,
    CallAnnotation,
    Conversation,
    ConversationDataSource,
    ConversationLevelSentiment,
    DialogflowIntent,
    DialogflowInteractionData,
    DialogflowSource,
    Entity,
    EntityMentionData,
    ExactMatchConfig,
    FaqAnswerData,
    GcsSource,
    HoldData,
    Intent,
    IntentMatchData,
    InterruptionData,
    Issue,
    IssueAssignment,
    IssueModel,
    IssueModelLabelStats,
    IssueModelResult,
    PhraseMatchData,
    PhraseMatcher,
    PhraseMatchRule,
    PhraseMatchRuleConfig,
    PhraseMatchRuleGroup,
    RuntimeAnnotation,
    SentimentData,
    Settings,
    SilenceData,
    SmartComposeSuggestionData,
    SmartReplyData,
)

__all__ = (
    'CalculateIssueModelStatsRequest',
    'CalculateIssueModelStatsResponse',
    'CalculateStatsRequest',
    'CalculateStatsResponse',
    'CreateAnalysisOperationMetadata',
    'CreateAnalysisRequest',
    'CreateConversationRequest',
    'CreatePhraseMatcherRequest',
    'DeleteAnalysisRequest',
    'DeleteConversationRequest',
    'DeletePhraseMatcherRequest',
    'ExportInsightsDataMetadata',
    'ExportInsightsDataRequest',
    'ExportInsightsDataResponse',
    'GetAnalysisRequest',
    'GetConversationRequest',
    'GetIssueModelRequest',
    'GetIssueRequest',
    'GetPhraseMatcherRequest',
    'GetSettingsRequest',
    'ListAnalysesRequest',
    'ListAnalysesResponse',
    'ListConversationsRequest',
    'ListConversationsResponse',
    'ListIssueModelsRequest',
    'ListIssueModelsResponse',
    'ListIssuesRequest',
    'ListIssuesResponse',
    'ListPhraseMatchersRequest',
    'ListPhraseMatchersResponse',
    'UpdateConversationRequest',
    'UpdateSettingsRequest',
    'ConversationView',
    'Analysis',
    'AnalysisResult',
    'AnnotationBoundary',
    'AnswerFeedback',
    'ArticleSuggestionData',
    'CallAnnotation',
    'Conversation',
    'ConversationDataSource',
    'ConversationLevelSentiment',
    'DialogflowIntent',
    'DialogflowInteractionData',
    'DialogflowSource',
    'Entity',
    'EntityMentionData',
    'ExactMatchConfig',
    'FaqAnswerData',
    'GcsSource',
    'HoldData',
    'Intent',
    'IntentMatchData',
    'InterruptionData',
    'Issue',
    'IssueAssignment',
    'IssueModel',
    'IssueModelLabelStats',
    'IssueModelResult',
    'PhraseMatchData',
    'PhraseMatcher',
    'PhraseMatchRule',
    'PhraseMatchRuleConfig',
    'PhraseMatchRuleGroup',
    'RuntimeAnnotation',
    'SentimentData',
    'Settings',
    'SilenceData',
    'SmartComposeSuggestionData',
    'SmartReplyData',
)
